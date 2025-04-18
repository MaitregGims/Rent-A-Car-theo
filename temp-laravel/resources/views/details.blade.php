<html lang="fr">
@include("header")
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 mt-7">
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="md:col-span-2">
            <div class="mb-4">
                <h1 class="font-semibold text-xl text-gray-900">
                    {{$car->brand}}
                </h1>
                <div class="text-indigo-600 font-semibold text-lg mt-1">
                    ${{$car->price_per_day}}
                    <span class="text-gray-400 text-sm">
        /hr
       </span>
                </div>
            </div>
            <div class="mb-6">
                <img alt="Gray silhouette side view of a BMW car" class="w-full max-w-full h-auto object-contain"
                     height="200"
                     src="https://storage.googleapis.com/a1aa/image/929c75d8-c2e1-4210-6675-f42a0b7ff50c.jpg"
                     width="600"
                    id="main"
                />
            </div>
            <div class="flex space-x-3 mb-8">
                <img alt="Blurred interior car image 1" class="second rounded-md w-24 h-16 object-cover" height="70"
                     src="https://storage.googleapis.com/a1aa/image/d29a769c-80fc-4886-0841-7196ce16afd2.jpg"
                     width="100"/>
                <img alt="Blurred interior car image 2" class="second rounded-md w-24 h-16 object-cover" height="70"
                     src="https://storage.googleapis.com/a1aa/image/b47069b0-ecce-4559-c50d-e9cae77ad768.jpg"
                     width="100"/>
                <img alt="Blurred interior car image 3" class="second rounded-md w-24 h-16 object-cover" height="70"
                     src="https://storage.googleapis.com/a1aa/image/5c7cc4c6-5311-4b3c-682e-65ba2cb148c9.jpg"
                     width="100"/>
            </div>
        </div>
        <div>
            <h2 class="font-semibold text-sm text-gray-900 mb-4">
                Technical Specification
            </h2>
            <div class="grid grid-cols-3 gap-3 mb-6">
                <div class="bg-white rounded-md p-3 text-center shadow-sm">
                    <i class="fas fa-cogs text-gray-600 mb-1">
                    </i>
                    <div class="text-xs font-semibold text-gray-900">
                        Gear Box
                    </div>
                    <div class="text-xs text-gray-500">
                        {{$car->transmission}}
                    </div>
                </div>
                <div class="bg-white rounded-md p-3 text-center shadow-sm">
                    <i class="fas fa-gas-pump text-gray-600 mb-1">
                    </i>
                    <div class="text-xs font-semibold text-gray-900">
                        Energy Type
                    </div>
                    <div class="text-xs text-gray-500">
                        {{$car->fuel_type}}
                    </div>
                </div>
                <div class="bg-white rounded-md p-3 text-center shadow-sm">
                    <i class="fas fa-tachometer-alt text-gray-600 mb-1">
                    </i>
                    <div class="text-xs font-semibold text-gray-900">
                        Type
                    </div>
                    <div class="text-xs text-gray-500">
                        {{$info->type_nom}}
                    </div>
                </div>
                <div class="bg-white rounded-md p-3 text-center shadow-sm">
                    <i class="fas fa-bolt text-gray-600 mb-1">
                    </i>
                    <div class="text-xs font-semibold text-gray-900">
                        Horse
                    </div>
                    <div class="text-xs text-gray-500">
                        {{$car->seats}}
                    </div>
                </div>
                <div class="bg-white rounded-md p-3 text-center shadow-sm">
                    <i class="fas fa-snowflake text-gray-600 mb-1">
                    </i>
                    <div class="text-xs font-semibold text-gray-900">
                        Air Conditioner
                    </div>
                    <div class="text-xs text-gray-500">
                        @if ($car->air_conditioning == 1)
                            Yes
                        @else
                            No
                        @endif

                    </div>
                </div>
                <div class="bg-white rounded-md p-3 text-center shadow-sm">
                    <i class="fas fa-user-friends text-gray-600 mb-1">
                    </i>
                    <div class="text-xs font-semibold text-gray-900">
                        Seats
                    </div>
                    <div class="text-xs text-gray-500">
                        5
                    </div>
                </div>
            </div>
            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-md mb-8"
                    type="button">
                Rent It Up
            </button>
            <div>
                <h3 class="font-semibold text-xs text-gray-900 mb-2">
                    Car Equipment
                </h3>
                <div class="grid grid-cols-2 gap-2 text-xs text-indigo-600 font-semibold">
                    <div class="flex items-center space-x-2">
        <span class="w-3 h-3 rounded-full bg-indigo-600 inline-block">
        </span>
                        <span>
         ABS
        </span>
                    </div>
                    <div class="flex items-center space-x-2">
        <span class="w-3 h-3 rounded-full bg-indigo-600 inline-block">
        </span>
                        <span>
         PSB
        </span>
                    </div>
                    <div class="flex items-center space-x-2">
        <span class="w-3 h-3 rounded-full bg-indigo-600 inline-block">
        </span>
                        <span>
         Air Bags
        </span>
                    </div>
                    <div class="flex items-center space-x-2">
        <span class="w-3 h-3 rounded-full bg-indigo-600 inline-block">
        </span>
                        <span>
         Air Suspension
        </span>
                    </div>
                    <div class="flex items-center space-x-2">
        <span class="w-3 h-3 rounded-full bg-indigo-600 inline-block">
        </span>
                        <span>
         Central Control
        </span>
                    </div>
                    <div class="flex items-center space-x-2">
        <span class="w-3 h-3 rounded-full bg-indigo-600 inline-block">
        </span>
                        <span>
         Air Conditioner
        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="font-semibold text-lg text-gray-900">
                Other cars
            </h2>
            <a class="text-xs font-semibold text-gray-900 hover:underline flex items-center space-x-1" href="/all">
      <span>
       View All
      </span>
                <i class="fas fa-arrow-right"></i>
            </a>
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



    </section>
</main>
<footer class="bg-gray-100 py-8 mt-16">
    @include("footer")
</footer>
<script src="{{ asset('js/carousel.js') }}"></script>
</body>
</html>
