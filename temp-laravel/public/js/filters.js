console.log("test")

let car_filters = document.querySelectorAll(".car_filter");
let energy_filters = document.querySelectorAll(".energy_filter");
let gear_filters = document.querySelectorAll(".gear_filter");

function ajaxAction() {
    let selectedCar = document.querySelector(".car_filter.bg-purple-600")?.dataset.value || '';
    let selectedEnergy = document.querySelector(".energy_filter.bg-purple-600")?.dataset.value || '';
    let selectedGear = document.querySelector(".gear_filter.bg-purple-600")?.dataset.value || '';

    console.log('Filters selected:', { selectedCar, selectedEnergy, selectedGear });

    fetch('/filter', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            car: selectedCar,
            energy: selectedEnergy,
            gear: selectedGear
        })
    })
        .then(response => {
            console.log('Response:', response);
            if (!response.ok) {
                throw new Error(`Error: ${response.status} - ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Data:', data);
            displayCars(data.cars);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function displayCars(cars) {
    const carContainer = document.getElementById('car-list');

    while (carContainer.firstChild) {
        carContainer.removeChild(carContainer.firstChild);
    }

    cars.forEach(car => {
        const carHTML = `
            <div class="border p-4 rounded-xl shadow-md">
                <div class="bg-gray-200 h-40 mb-4 rounded"></div>
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-semibold">${car.brand}</h3>
                    <span class="text-purple-600 font-bold">$${car.price_per_day}</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">${car.model}</p>
                <p class="text-sm text-gray-500 mb-2">
                    <i class="ri-settings-4-line"></i> ${car.transmission} •
                    <i class="ri-gas-station-line"></i> ${car.fuel_type} •
                    <i class="ri-armchair-line"></i> ${car.seats} seats
                </p>
                <button class="bg-[#6C2BD9] hover:bg-purple-800 text-white py-2 w-full rounded-md">
                    <a href="/car/${car.id}">View Details</a>
                </button>
            </div>
        `;

        carContainer.innerHTML += carHTML;
    });
}

car_filters.forEach((filter) => {
    filter.addEventListener('click', () => {
        car_filters.forEach(btn => {
            btn.classList.remove('bg-purple-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-600');
        });
        filter.classList.add('bg-purple-600', 'text-white');
        ajaxAction();
    });
});

energy_filters.forEach((filter) => {
    filter.addEventListener('click', () => {
        energy_filters.forEach(btn => {
            btn.classList.remove('bg-purple-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-600');
        });
        filter.classList.add('bg-purple-600', 'text-white');
        ajaxAction();
    });
});

gear_filters.forEach((filter) => {
    filter.addEventListener('click', () => {
        gear_filters.forEach(btn => {
            btn.classList.remove('bg-purple-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-600');
        });
        filter.classList.add('bg-purple-600', 'text-white');
        ajaxAction();
    });
});
