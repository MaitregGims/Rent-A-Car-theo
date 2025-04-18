<html>
@include("header")
<main class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-6">
        Select a vehicle group
    </h1>
    <div class="flex justify-center space-x-4 mb-6">
        <button class="px-4 py-2 bg-purple-600 text-white rounded-full">
            All Vehicles
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            sedant
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            cabriolet
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            pickup
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            suv
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            minivan
        </button>
    </div>


    <div class="flex justify-center space-x-4 mb-6">
        <button class="px-4 py-2 bg-purple-600 text-white rounded-full">
            All energy type
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            essence
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            electrique
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            hybride
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            diesel
        </button>
    </div>

    <div class="flex justify-center space-x-4 mb-6">
        <button class="px-4 py-2 bg-purple-600 text-white rounded-full">
            All type of gears
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            electrique
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            manual
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($cars as $car)
            <div class="border p-4 rounded-xl shadow-md">
                <div class="bg-gray-200 h-40 mb-4 rounded"></div>
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-semibold">{{$car->brand}}</h3>

                    <span class="text-purple-600 font-bold">${{$car->price_per_day}}</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">{{$car->model}}</p>
                <p class="text-sm text-gray-500 mb-2">
                    <i class="ri-settings-4-line"></i> {{$car->transmission}} •
                    <i class="ri-gas-station-line"></i> {{$car->fuel_type}} •
                    <i class="ri-armchair-line"></i> {{$car->seats}} seats
                </p>
                <button class="bg-[#6C2BD9] hover:bg-purple-800 text-white py-2 w-full rounded-md">
                    <a href="/car/{{$car->id}}">View Details</a>
                </button>
            </div>
        @endforeach
    </div>


</main>
<footer class="bg-white py-6 mt-12">
    <div class="max-w-7xl mx-auto flex justify-around items-center bg-gray-200 py-16 px-10 rounded-3xl w-[90%] mx-auto relative mt-7">
        <img alt="Toyota logo" height="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Toyota_logo_%28Red%29.svg/2560px-Toyota_logo_%28Red%29.svg.png" width="50"/>
        <img alt="Ford logo" height="50" src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Ford-Motor-Company-Logo.png" width="50"/>
        <img alt="Mercedes logo" height="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Mercedes-Logo.svg/2048px-Mercedes-Logo.svg.png" width="50"/>
        <img alt="Jeep logo" height="50" src="https://www.logo-voiture.com/wp-content/uploads/2021/01/Logo-Jeep.png" width="50"/>
        <img alt="Audi logo" height="50" src="https://www.logo-voiture.com/wp-content/uploads/2023/01/logo-audi-2016.png" width="50"/>
    </div>

    @include("footer")
</footer>
</body>
</html>
