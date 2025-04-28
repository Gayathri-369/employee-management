<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" class="w-full px-3 py-2 border rounded" placeholder="Your name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full px-3 py-2 border rounded" placeholder="Your email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Message</label>
                <textarea class="w-full px-3 py-2 border rounded" placeholder="Your message"></textarea>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Send
            </button>
        </form>
    </div>
</body>
</html>
