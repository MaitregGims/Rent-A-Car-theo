<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>
<body class="bg-white text-gray-800">
<!-- Header -->
<header class="flex justify-between items-center py-6 px-10 shadow-md">
    <div class="text-xl font-bold"><i class="ri-car-fill"></i> Car Rental</div>
    <div class="text-xl font-bold">vehicules</div>
    <nav class="flex items-center gap-6">
        <div class="w-10 h-10 rounded-full bg-[#6C2BD9] flex items-center justify-center text-white font-bold"><i class="ri-phone-fill"></i></div>
        <p class="text-sm font-medium">need a help ? <br> +123456789</p>
    </nav>
</header>

<!-- Hero -->
<section class="bg-[#6C2BD9] text-white py-16 px-10 rounded-3xl w-[90%] mx-auto relative mt-7">
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-10">
        <div>
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-4">
                Experience the road <br> like never before
            </h1>
            <p class="text-lg mb-6">
                Rent the best cars at the best prices. Flexible, reliable and easy.
            </p>
            <a href="#"
               class="bg-orange-400 hover:bg-orange-500 transition text-white font-semibold px-6 py-3 rounded-md">
                Reserve now
            </a>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-xl w-full max-w-md text-gray-900">
            <h2 class="text-lg font-semibold mb-4">Book your car</h2>
            <form class="flex flex-col gap-4">
                <select class="border p-2 rounded-md">
                    <option>Select Vehicle</option>
                </select>
                <input type="date" class="border p-2 rounded-md" />
                <input type="date" class="border p-2 rounded-md" />
                <button type="submit"
                        class="bg-orange-400 hover:bg-orange-500 text-white font-semibold py-2 rounded-md">
                    Find Vehicle
                </button>
            </form>
        </div>
    </div>
</section>


<!-- Features -->
<section class="py-12 px-10 text-center grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
    <div>
        <div class="text-2xl mb-2"><i class="ri-map-pin-fill"></i></div>
        <h3 class="font-semibold mb-2">Availability</h3>
        <p>Book anytime with a variety of car options.</p>
    </div>
    <div>
        <div class="text-2xl mb-2"><i class="ri-car-fill"></i></div>
        <h3 class="font-semibold mb-2">Comfort</h3>
        <p>Enjoy a smooth, clean, and modern ride.</p>
    </div>
    <div>
        <div class="text-2xl mb-2"><i class="ri-wallet-2-line"></i></div>
        <h3 class="font-semibold mb-2">Savings</h3>
        <p>Great rates with no hidden fees.</p>
    </div>
</section>

<!-- Car Grid -->
<section class="py-12 px-10 max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Choose the car that suits you</h2>
        <a href="/all" class="text-sm font-semibold text-blue-600">View all</a>
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
                <a href="/car/{{$car->id}}">
                    <button class="bg-[#6C2BD9] hover:bg-purple-800 text-white py-2 w-full rounded-md">
                        View Details
                    </button>
                </a>
            </div>
        @endforeach
    </div>


</section>

<!-- Footer -->
<footer class="bg-gray-100 py-8 px-10">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-4">
        <div class="font-bold"><i class="ri-car-fill"></i> Car Rental</div>
        <div class="text-sm">
            <p>1234 Example St, NY 12345</p>
            <p>Email: contact@carrental.com</p>
            <p>Phone: (555) 123-4567</p>
        </div>
        <div class="text-sm text-gray-500">© 2025 Car Rental. All rights reserved.</div>
    </div>
</footer>
</body>
</html>
