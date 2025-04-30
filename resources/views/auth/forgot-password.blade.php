<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </div>

        <!-- Session Status (you can display messages here) -->
        <div id="session-status" class="mb-4 text-green-500">
            <!-- Session status message goes here -->
        </div>

        <form method="POST" action="/password/email">
            <!-- CSRF Token -->
            <input type="hidden" name="_token" value="<!-- Insert CSRF token here -->">

            <!-- Email Address -->
            <div>
                <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                <input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="email" name="email" required autofocus>
                <div class="text-red-500 text-sm mt-2" id="email-error">
                    <!-- Validation error message for email -->
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>
</body>
</html>
