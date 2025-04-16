<html>
<head>
    <title>
        Select a Vehicle Group
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>
<body class="bg-gray-100">
<header class="flex justify-between items-center p-4 bg-white shadow-md">
    <div class="text-xl font-bold"><i class="ri-car-fill"></i> Car Rental</div>
    <nav class="flex space-x-4">
        <a class="text-gray-600 hover:text-black" href="/">
            Home
        </a>
        <a class="text-gray-600 hover:text-black" href="/all">
            Vehicles
        </a>
        <a class="text-gray-600 hover:text-black" href="#">
            Pricing
        </a>
        <a class="text-gray-600 hover:text-black" href="#">
            Contact Us
        </a>
    </nav>
    <nav class="flex items-center gap-6">
        <div class="w-10 h-10 rounded-full bg-[#6C2BD9] flex items-center justify-center text-white font-bold"><i class="ri-phone-fill"></i></div>
        <p class="text-sm font-medium">need a help ? <br> +123456789</p>
    </nav>
</header>
<main class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-6">
        Select a vehicle group
    </h1>
    <div class="flex justify-center space-x-4 mb-6">
        <button class="px-4 py-2 bg-purple-600 text-white rounded-full">
            All Vehicles
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            Economy
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            SUV
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            Luxury
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-full">
            Sports
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
    <div class="max-w-7xl mx-auto flex justify-around items-center">
        <img alt="Toyota logo" height="50" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-i2kolm4WbmFRZEXKNX775gvb.png?st=2025-04-16T18%3A55%3A47Z&amp;se=2025-04-16T20%3A55%3A47Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-16T05%3A49%3A37Z&amp;ske=2025-04-17T05%3A49%3A37Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=bBXsCJIML6qsseW7wYlwTM9WwWAxvnUolJfUQq1G2eQ%3D" width="50"/>
        <img alt="Ford logo" height="50" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-5LCBaafAdWpYK4s6xtW81Yed.png?st=2025-04-16T18%3A55%3A46Z&amp;se=2025-04-16T20%3A55%3A46Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-16T07%3A19%3A42Z&amp;ske=2025-04-17T07%3A19%3A42Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=iKySbklVijXj/2rjcy4D%2Bs/AVwP%2BvWcVe67f4v8Bpzs%3D" width="50"/>
        <img alt="Mercedes logo" height="50" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-gS5au8FcmPz1KXGjaBPqcXJJ.png?st=2025-04-16T18%3A55%3A44Z&amp;se=2025-04-16T20%3A55%3A44Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-16T05%3A31%3A33Z&amp;ske=2025-04-17T05%3A31%3A33Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=VBbarOn2kZlBwdQgv0s9DHgqmilVgEhQhVGxzAuuirM%3D" width="50"/>
        <img alt="Jeep logo" height="50" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-iH4a03m1qDhIBSp0TtlBKans.png?st=2025-04-16T18%3A55%3A47Z&amp;se=2025-04-16T20%3A55%3A47Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T23%3A52%3A13Z&amp;ske=2025-04-16T23%3A52%3A13Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=DkjN%2BXd9ZHnQHG1wwcKxM%2Blm278MEhD/6MuCp%2Bz8Cnw%3D" width="50"/>
        <img alt="Audi logo" height="50" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-YJoOCf63TpGqT2AhCyquuZF6.png?st=2025-04-16T18%3A55%3A43Z&amp;se=2025-04-16T20%3A55%3A43Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-16T14%3A31%3A50Z&amp;ske=2025-04-17T14%3A31%3A50Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=t5JX9ukT%2BwUd852ligpded0odfm7MPtT%2BLeQqt9RCdg%3D" width="50"/>
    </div>
    <div class="max-w-7xl mx-auto flex justify-around items-center mt-6">
        <div class="text-center">
            <i class="fas fa-phone-alt text-2xl text-gray-600">
            </i>
            <p class="text-gray-600">
                Call us: (123) 456-7890
            </p>
        </div>
        <div class="text-center">
            <i class="fas fa-map-marker-alt text-2xl text-gray-600">
            </i>
            <p class="text-gray-600">
                Location: 123 Main St, City, Country
            </p>
        </div>
        <div class="text-center">
            <i class="fas fa-envelope text-2xl text-gray-600">
            </i>
            <p class="text-gray-600">
                Email: info@carrental.com
            </p>
        </div>
        <div class="text-center">
            <i class="fas fa-clock text-2xl text-gray-600">
            </i>
            <p class="text-gray-600">
                Open: Mon-Fri 9am-6pm
            </p>
        </div>
    </div>
</footer>
</body>
</html>
