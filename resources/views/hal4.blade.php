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
            <div class="space-y-6">
                <div class="text-white text-2xl cursor-pointer">🏠</div>
                <div class="text-white text-2xl cursor-pointer">👤</div>
                <div class="text-white text-2xl cursor-pointer">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gray-200 shadow">
                <input 
                    type="text" 
                    class="w-full p-2 border border-gray-300 rounded" 
                    placeholder="Search..."
                />
            </header>

            <!-- Banner -->
            <section class="relative flex items-center justify-center p-5">
                <div class="absolute top-5 left-5 bg-red-500 text-white py-1 px-3 rounded text-lg">30% Off</div>
                <img 
                    src="asset/download (29).jpeg" 
                    alt="Burger" 
                    class="w-full max-w-lg rounded"
                />
            </section>

            <!-- Tabs -->
            <nav class="flex justify-center bg-gray-100 py-2 space-x-4">
                <a href="hal1.html" class="px-4 py-2 rounded hover:bg-gray-200">Checkout</a>
                <a href="hal2.html" class="px-4 py-2 rounded bg-gray-800 text-white">Nearby</a>
                <a href="hal3.html" class="px-4 py-2 rounded hover:bg-gray-200">Promotion</a>
                <a href="hal4.html" class="px-4 py-2 rounded hover:bg-gray-200">Newcomers</a>
                <a href="hal5.html" class="px-4 py-2 rounded hover:bg-gray-200">Best Seller</a>
            </nav>

            <!-- Food List -->
            <section class="flex flex-wrap justify-center gap-6 p-5">
                <div class="text-center bg-white p-5 rounded shadow hover:scale-105 transition">
                    <img src="asset/sushi.jpg" alt="Sushi" class="w-36 h-auto rounded mb-3">
                    <p>Sushi - Rp.25.000</p>
                </div>
                <div class="text-center bg-white p-5 rounded shadow hover:scale-105 transition">
                    <img src="asset/kakap.jpg" alt="Kakap" class="w-36 h-auto rounded mb-3">
                    <p>Kakap - Rp.30.000</p>
                </div>
                <div class="text-center bg-white p-5 rounded shadow hover:scale-105 transition">
                    <img src="asset/steak.jpg" alt="Steak" class="w-36 h-auto rounded mb-3">
                    <p>Steak - Rp.45.000</p>
                </div>
                <div class="text-center bg-white p-5 rounded shadow hover:scale-105 transition">
                    <img src="asset/syahwarma.jpg" alt="Shawarma" class="w-36 h-auto rounded mb-3">
                    <p>Shawarma - Rp.20.000</p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>