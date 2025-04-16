<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

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

        return view('details', ["car" => $data]);
    }
}
