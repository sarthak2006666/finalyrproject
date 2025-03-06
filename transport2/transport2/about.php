<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Fleet Gallery</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .filter-buttons {
            text-align: center;
            margin-bottom: 20px;
        }

        .filter-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .filter-btn.active {
            background-color: #0056b3;
        }

        .filter-btn:hover {
            background-color: #0056b3;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .vehicle-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }

        .vehicle-item:hover {
            transform: scale(1.05);
        }

        .vehicle-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .vehicle-item h3 {
            margin: 10px 0;
            color: #333;
        }

        .vehicle-item p {
            color: #666;
            padding: 0 10px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vehicle Fleet Gallery</h1>
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="car">Cars</button>
            <button class="filter-btn" data-filter="truck">Trucks</button>
            <button class="filter-btn" data-filter="suv">SUVs</button>
        </div>
        <div class="gallery">
            <!-- Vehicle items will be dynamically inserted here -->
        </div>
    </div>

    <script>
        // JavaScript Functionality
        document.addEventListener('DOMContentLoaded', function () {
            const gallery = document.querySelector('.gallery');
            const filterButtons = document.querySelectorAll('.filter-btn');

            const vehicles = [
                { type: 'car', name: 'Sedan', image: 'sedan.jpg', description: 'A comfortable and efficient sedan.' },
                { type: 'car', name: 'Sports Car', image: 'sports-car.jpg', description: 'A high-performance sports car.' },
                { type: 'truck', name: 'Pickup Truck', image: 'pickup-truck.jpg', description: 'A rugged and reliable pickup truck.' },
                { type: 'suv', name: 'Family SUV', image: 'suv.jpg', description: 'A spacious SUV for the whole family.' },
                { type: 'truck', name: 'Delivery Truck', image: 'delivery-truck.jpg', description: 'A heavy-duty delivery truck.' },
                { type: 'suv', name: 'Luxury SUV', image: 'luxury-suv.jpg', description: 'A luxurious and stylish SUV.' }
            ];

            function displayVehicles(filter = 'all') {
                gallery.innerHTML = '';
                vehicles.forEach(vehicle => {
                    if (filter === 'all' || vehicle.type === filter) {
                        const vehicleItem = document.createElement('div');
                        vehicleItem.classList.add('vehicle-item');
                        vehicleItem.innerHTML = `
                            <img src="images/${vehicle.image}" alt="${vehicle.name}">
                            <h3>${vehicle.name}</h3>
                            <p>${vehicle.description}</p>
                        `;
                        gallery.appendChild(vehicleItem);
                    }
                });
            }

            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    const filter = this.getAttribute('data-filter');
                    displayVehicles(filter);
                });
            });

            // Display all vehicles by default
            displayVehicles();
        });
    </script>
</body>
</html>