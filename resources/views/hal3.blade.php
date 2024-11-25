<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI - Halaman 2</title>
</head>
<body class="m-0 p-0 font-sans bg-gray-200">
    <div class="grid grid-cols-[70px_auto] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 flex flex-col items-center py-4">
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
            <section class="relative flex justify-center items-center p-5">
                <div class="absolute top-5 left-5 bg-red-500 text-white py-1 px-3 rounded text-lg">
                    30% Off
                </div>
                <img src="asset/download (29).jpeg" alt="Burger" class="w-full max-w-md rounded-lg">
            </section>

            <!-- Tabs -->
            <nav class="flex justify-center bg-gray-200 py-3 space-x-4">
                <a href="hal1.html" class="px-5 py-2 rounded hover:bg-gray-300">Checkout</a>
                <a href="hal2.html" class="px-5 py-2 rounded bg-gray-800 text-white">Nearby</a>
                <a href="hal3.html" class="px-5 py-2 rounded hover:bg-gray-300">Promotion</a>
                <a href="hal4.html" class="px-5 py-2 rounded hover:bg-gray-300">Newcomers</a>
                <a href="hal5.html" class="px-5 py-2 rounded hover:bg-gray-300">Best Seller</a>
            </nav>

            <!-- Food List -->
            <section class="flex flex-wrap justify-center gap-5 p-5">
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/kakap.jpg" alt="kakap" class="w-40 h-auto rounded-lg mb-2">
                    <p>Kakap - Rp.26.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/sate.jpg" alt="sate" class="w-40 h-auto rounded-lg mb-2">
                    <p>Sate - Rp.25.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/sushi.jpg" alt="sushi" class="w-40 h-auto rounded-lg mb-2">
                    <p>Sushi - Rp.20.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/Spaghetti.jpeg" alt="spaghetti" class="w-40 h-auto rounded-lg mb-2">
                    <p>Spaghetti - Rp.20.000</p>
                </div>
            </section>
        </main>
    </div>
    <script src="java.js"></script>
</body>
</html>
