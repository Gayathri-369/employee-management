<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        
        <form method="POST" action="/password/store">
            <!-- CSRF Token -->
            <input type="hidden" name="_token" value="<!-- Insert CSRF token here -->">

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="<!-- Insert token here -->">

            <!-- Email Address -->
            <div>
                <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                <input id="email" name="email" type="email" required autofocus autocomplete="username" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                <div class="text-red-500 text-sm mt-2" id="email-error">
                    <!-- Email validation error -->
                </div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                <input id="password" name="password" type="password" required autocomplete="new-password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                <div class="text-red-500 text-sm mt-2" id="password-error">
                    <!-- Password validation error -->
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                <div class="text-red-500 text-sm mt-2" id="password_confirmation-error">
                    <!-- Confirm Password validation error -->
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="ms-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Reset Password
                </button>
            </div>
        </form>

    </div>
</body>
</html>
