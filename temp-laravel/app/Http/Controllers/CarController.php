<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $data = Car::take(6)->get();

        return view('index', ["cars" => $data]);
    }

    public function all()
    {
        $data = Car::all();

        return view('all', ["cars" => $data]);
    }

    public function showOne($id)
    {
        $data = Car::query()->find($id);

        $carinfo = DB::table('vehicule')
            ->join('vehicule_type', 'vehicule.vehicule_type_id', '=', 'vehicule_type.id')
            ->leftJoin('vehicule_equipment', 'vehicule.id', '=', 'vehicule_equipment.vehicule_id')
            ->leftJoin('equipment', 'vehicule_equipment.equipment_id', '=', 'equipment.id')
            ->where('vehicule.id', '=', $id)
            ->select(
                'vehicule.*',
                'vehicule_type.name as type_nom',
                'equipment.name as equipment_nom'
            )
            ->first();


        $recommendations = Car::inRandomOrder()->take(6)->get();

        return view('details', ["car" => $data, "info" => $carinfo, "cars" => $recommendations]);
    }


    public function filter(Request $request)
    {
        $filters = $request->only(['car', 'energy', 'gear']);

        $query = Car::query()->with('carType');

        if ($filters['car']) {
            $query->whereHas('carType', function ($q) use ($filters) {
                $q->where('name', $filters['car']);
            });
        }

        if ($filters['energy']) {
            $query->where('fuel_type', $filters['energy']);
        }

        if ($filters['gear']) {
            $query->where('transmission', $filters['gear']);
        }

        $cars = $query->get();

        return response()->json([
            'status' => 'success',
            'cars' => $cars
        ]);
    }







}
