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
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition">🏠</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition">👤</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition">⭐</div>
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
    <img src="{{ asset('asset/burger.jpeg') }}" alt="Burger Promo" class="w-full max-w-md rounded-lg">
</section>


            <!-- Tabs -->

            <nav class="flex justify-center bg-gray-200 py-3">
    <a id="tabCheckout" href="{{ route('hal1') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Checkout</a>
    <a id="tabNearby" href="{{ route('hal2') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Nearby</a>
    <a id="tabPromotion" href="{{ route('hal3') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Promotion</a>
    <a id="tabNewcomers" href="{{ route('hal4') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Newcomers</a>
    <a id="tabBestSeller" href="{{ route('hal5') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Best Seller</a>
</nav>


            <!-- Food List -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-5">
    <div class="food-item hover:scale-105 transition-transform flex flex-col items-center text-center p-3 bg-white rounded-lg shadow" data-food="Spaghetti - Rp.26.000" data-price="26000">
        <img src="{{ asset('asset/Spaghetti.jpeg') }}" alt="Spaghetti with sauce" onerror="this.src='{{ asset('asset/placeholder.jpg') }}'" class="w-32 h-32 object-cover rounded-lg mb-3">
        <p class="text-lg font-semibold text-gray-800">Spaghetti - Rp.26.000</p>
        <button class="add-to-order py-1 px-3 bg-blue-500 text-white rounded w-full mt-3">Add to Order</button>
    </div>
    <div class="food-item hover:scale-105 transition-transform flex flex-col items-center text-center p-3 bg-white rounded-lg shadow" data-food="Pizza Super - Rp.30.000" data-price="30000">
        <img src="{{ asset('asset/Pizza.jpg') }}" alt="Delicious Pizza Super" class="w-32 h-32 object-cover rounded-lg mb-3">
        <p class="text-lg font-semibold text-gray-800">Pizza Super - Rp.30.000</p>
        <button class="add-to-order py-1 px-3 bg-blue-500 text-white rounded w-full mt-3">Add to Order</button>
    </div>
    <div class="food-item hover:scale-105 transition-transform flex flex-col items-center text-center p-3 bg-white rounded-lg shadow" data-food="Taco's - Rp.20.000" data-price="20000">
        <img src="{{ asset('asset/Tacos.jpg') }}" alt="Tacos" class="w-32 h-32 object-cover rounded-lg mb-3">
        <p class="text-lg font-semibold text-gray-800">Taco's - Rp.20.000</p>
        <button class="add-to-order py-1 px-3 bg-blue-500 text-white rounded w-full mt-3">Add to Order</button>
    </div>
    <div class="food-item hover:scale-105 transition-transform flex flex-col items-center text-center p-3 bg-white rounded-lg shadow" data-food="Shawarma - Rp.20.000" data-price="20000">
        <img src="{{ asset('asset/Syahwarma.jpg') }}" alt="Shawarma" class="w-32 h-32 object-cover rounded-lg mb-3">
        <p class="text-lg font-semibold text-gray-800">Shawarma - Rp.20.000</p>
        <button class="add-to-order py-1 px-3 bg-blue-500 text-white rounded w-full mt-3">Add to Order</button>
    </div>
    <div class="food-item hover:scale-105 transition-transform flex flex-col items-center text-center p-3 bg-white rounded-lg shadow" data-food="Beef Steak - Rp.30.000" data-price="30000">
        <img src="{{ asset('asset/beef steak.jpg') }}" alt="Beef Steak" class="w-32 h-32 object-cover rounded-lg mb-3">
        <p class="text-lg font-semibold text-gray-800">Beef Steak - Rp.30.000</p>
        <button class="add-to-order py-1 px-3 bg-blue-500 text-white rounded w-full mt-3">Add to Order</button>
    </div>
</section>

        </main>

        <!-- Orders -->
        <aside class="bg-white p-5 shadow flex flex-col">
            <h3 class="mb-3 text-lg font-semibold">My Orders</h3>

            <!-- Daftar Pesanan -->
            <div id="orderList" class="mb-5">
                <p class="text-gray-500">No items in your order.</p>
            </div>

            <!-- Total Harga -->
            <div class="total-price bg-gray-50 p-3 border border-gray-300 rounded mb-5">
                <p class="font-semibold">Total: <span id="totalPrice">Rp.0</span></p>
            </div>

            <!-- Alamat Pengiriman -->
            <div class="delivery-info bg-gray-50 p-3 border border-gray-300 rounded mb-5">
                <label for="deliveryAddress" class="block text-sm text-gray-700 font-semibold">Delivery Address</label>
                <input type="text" id="deliveryAddress" placeholder="Enter your address here" class="p-2 mb-3 border border-gray-300 rounded w-full">
            </div>

            <!-- Tombol Save Address -->
            <button id="saveAddressButton" class="py-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition w-full">Save Address</button>

            <!-- Tombol Check Out -->
            <button id="checkoutButton" class="py-2 bg-gray-800 text-white rounded hover:bg-gray-600 transition mt-3 w-full" disabled>Check Out</button>
        </aside>
    </div>

    <script>
        // Manage the order list
        let totalPrice = 0;
        let orderItems = [];

        const addButtons = document.querySelectorAll('.add-to-order');
        addButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const foodName = e.target.closest('.food-item').dataset.food;
                const price = parseInt(e.target.closest('.food-item').dataset.price);

                orderItems.push({ name: foodName, price });
                totalPrice += price;

                updateOrderList();
                updateTotalPrice();
                enableCheckoutButton();
            });
        });

        // Update order list UI
        function updateOrderList() {
            const orderListElement = document.getElementById('orderList');
            if (orderItems.length > 0) {
                orderListElement.innerHTML = orderItems.map(item => `<p>${item.name} - Rp.${item.price}</p>`).join('');
            } else {
                orderListElement.innerHTML = '<p class="text-gray-500">No items in your order.</p>';
            }
        }

        // Update total price
        function updateTotalPrice() {
            document.getElementById('totalPrice').innerText = `Rp.${totalPrice}`;
        }

        // Enable checkout button if there are items
        function enableCheckoutButton() {
            const checkoutButton = document.getElementById('checkoutButton');
            checkoutButton.disabled = orderItems.length === 0;
        }

        // Save address
        document.getElementById('saveAddressButton').addEventListener('click', () => {
            const address = document.getElementById('deliveryAddress').value.trim();
            if (address) {
                alert("Address saved: " + address);
            } else {
                alert("Please enter a valid address.");
            }
        });

        // Checkout functionality
        document.getElementById('checkoutButton').addEventListener('click', () => {
            // Empty the order list after checkout
            orderItems = [];
            totalPrice = 0;

            // Update UI
            updateOrderList();
            updateTotalPrice();
            enableCheckoutButton();

            alert('Order successfully checked out!');
        });
    </script>
</body>
</html>
