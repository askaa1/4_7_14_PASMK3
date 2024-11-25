<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI</title>
</head>
<body class="m-0 p-0 font-sans bg-gray-200">
    <div class="grid grid-cols-[70px_auto_300px] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 flex flex-col items-center py-2">
            <div class="menu space-y-5">
                <div class="icon text-white text-2xl cursor-pointer">🏠</div>
                <div class="icon text-white text-2xl cursor-pointer">👤</div>
                <div class="icon text-white text-2xl cursor-pointer">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gray-100 shadow">
                <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Search...">
            </header>

            <!-- Banner -->
            <section class="relative flex justify-end items-center p-5">
                <div class="absolute top-5 left-5 bg-red-500 text-white py-1 px-3 rounded text-lg">
                    30% Off
                </div>
                <img src="asset/download (29).jpeg" alt="Burger" class="w-full max-w-md rounded-lg">
            </section>

            <!-- Tabs -->
            <nav class="flex justify-center bg-gray-200 py-3">
                <a href="hal1.html" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Checkout</a>
                <a href="hal2.html" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Nearby</a>
                <a href="hal3.html" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Promotion</a>
                <a href="hal4.html" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Newcomers</a>
                <a href="hal5.html" class="px-5 py-2 mx-2 rounded bg-gray-800 text-white">Best Seller</a>
            </nav>

            <!-- Food List -->
            <section class="flex flex-wrap justify-center gap-5 p-5">
                <div class="food-item hover:scale-105 transition-transform">
                    <img src="asset/spageti.jpg" alt="Spaghetti" class="w-40 h-24 object-cover rounded-lg shadow">
                    <p class="mt-2 text-center">Spaghetti - Rp.26.000</p>
                </div>
                <div class="food-item hover:scale-105 transition-transform">
                    <img src="asset/Pizza.jpg" alt="Pizza" class="w-40 h-24 object-cover rounded-lg shadow">
                    <p class="mt-2 text-center">Pizza Super - Rp.30.000</p>
                </div>
                <div class="food-item hover:scale-105 transition-transform">
                    <img src="asset/tacps.jpg" alt="Tacos" class="w-40 h-24 object-cover rounded-lg shadow">
                    <p class="mt-2 text-center">Taco's - Rp.20.000</p>
                </div>
                <div class="food-item hover:scale-105 transition-transform">
                    <img src="asset/syahwarma.jpg" alt="Shawarma" class="w-40 h-24 object-cover rounded-lg shadow">
                    <p class="mt-2 text-center">Shawarma - Rp.20.000</p>
                </div>
                <div class="food-item hover:scale-105 transition-transform">
                    <img src="asset/beef steak.jpg" alt="Beef Steak" class="w-40 h-24 object-cover rounded-lg shadow">
                    <p class="mt-2 text-center">Beef Steak - Rp.30.000</p>
                </div>
            </section>
        </main>

        <!-- Orders -->
        <aside class="bg-white p-5 shadow flex flex-col">
            <h3 class="mb-3 text-lg font-semibold">My Orders</h3>
            <div class="delivery-info bg-gray-50 p-3 border border-gray-300 rounded mb-5">
                <p>Delivery Address</p>
                <p class="font-semibold">1341 MORRIS STREET</p>
                <p>40 mins | 4 kms</p>
            </div>
            <div class="order-item flex items-center mb-3">
                <img src="asset/Delicious Burger.jpeg" alt="Burger" class="w-12 h-12 object-cover rounded mr-3">
                <p class="flex-grow">Burger Mozza - Rp.25.000</p>
                <input type="number" value="1" min="1" class="w-16 p-1 border border-gray-300 rounded">
            </div>
            <div class="order-item flex items-center mb-3">
                <img src="asset/Pizza.jpg" alt="Pizza" class="w-12 h-12 object-cover rounded mr-3">
                <p class="flex-grow">Pizza Super Supreme - Rp.30.000</p>
                <input type="number" value="1" min="1" class="w-16 p-1 border border-gray-300 rounded">
            </div>
            <input type="text" placeholder="Enter Promotion" class="p-2 mb-3 border border-gray-300 rounded">
            <button class="py-2 bg-gray-800 text-white rounded hover:bg-gray-600 transition">Add Coupon</button>
            <button class="py-2 bg-gray-800 text-white rounded hover:bg-gray-600 transition mt-3">Check Out</button>
        </aside>
    </div>
</body>
</html>
