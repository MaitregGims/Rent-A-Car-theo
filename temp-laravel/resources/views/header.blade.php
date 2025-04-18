<head>
    <title>
        Select a Vehicle Group
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
