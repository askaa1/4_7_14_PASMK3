<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-600 to-blue-500 h-screen flex flex-col justify-center items-center">
    <h2 class="text-white text-2xl font-bold mb-5 tracking-wider">Login</h2>
    <form id="loginForm" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-bold mb-2">Username:</label>
            <input type="text" name="username" id="username" 
                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-600 transition">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
            <input type="password" name="password" id="password" 
                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-600 transition">
        </div>
        <button type="submit" 
            class="w-full py-3 bg-purple-600 text-white rounded hover:bg-blue-500 transition transform hover:-translate-y-1 active:translate-y-0">
            LOGIN
        </button>
    </form>
</body>
</html>
