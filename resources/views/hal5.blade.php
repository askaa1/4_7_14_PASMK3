<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI - Halaman 2</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="grid grid-cols-[70px_auto] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 flex flex-col items-center py-4">
            <div class="menu space-y-5">
                <div class="icon text-2xl text-white cursor-pointer">🏠</div>
                <div class="icon text-2xl text-white cursor-pointer">👤</div>
                <div class="icon text-2xl text-white cursor-pointer">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gray-200 shadow">
                <input type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Search...">
            </header>

            <!-- Banner -->
            <section class="relative flex justify-center items-center p-5">
                <div class="absolute top-5 left-5 bg-red-500 text-white py-1 px-3 rounded text-lg">
                    30% Off
                </div>
                <img src="asset/download (29).jpeg" alt="Burger" class="w-full max-w-md rounded-lg">
            </section>

            <!-- Tabs -->
            <nav class="flex justify-center bg-gray-300 py-3 space-x-4">
                <a href="hal1.html" class="px-5 py-2 rounded hover:bg-gray-400">Checkout</a>
                <a href="hal2.html" class="px-5 py-2 rounded hover:bg-gray-400">Nearby</a>
                <a href="hal3.html" class="px-5 py-2 rounded hover:bg-gray-400">Promotion</a>
                <a href="hal4.html" class="px-5 py-2 rounded hover:bg-gray-400">Newcomers</a>
                <a href="hal5.html" class="px-5 py-2 rounded bg-gray-800 text-white">Best Seller</a>
            </nav>

            <!-- Food List -->
            <section class="flex flex-wrap justify-center gap-5 p-5">
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/Spaghetti.jpeg" alt="Spaghetti" class="w-40 h-auto rounded-lg mb-2">
                    <p>Spaghetti - Rp.26.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/Corndog.jpg" alt="Corndog" class="w-40 h-auto rounded-lg mb-2">
                    <p>Corndog - Rp.15.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/tacps.jpg" alt="Tacos" class="w-40 h-auto rounded-lg mb-2">
                    <p>Taco's - Rp.20.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/Delicious Burger.jpeg" alt="Burger" class="w-40 h-auto rounded-lg mb-2">
                    <p>Burger - Rp.20.000</p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
