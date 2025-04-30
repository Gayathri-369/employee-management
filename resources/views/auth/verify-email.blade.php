<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <!-- Verification Message -->
        <div class="mb-4 text-sm text-gray-600">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </div>

        <!-- Status message if verification link is sent -->
        <div id="verification-status" class="mb-4 font-medium text-sm text-green-600">
            <!-- This section will show if a new verification link was sent -->
            A new verification link has been sent to the email address you provided during registration.
        </div>

        <div class="mt-4 flex items-center justify-between">
            <!-- Resend Verification Email Form -->
            <form method="POST" action="/verification/send">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="<!-- Insert CSRF token here -->">
                <div>
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Resend Verification Email
                    </button>
                </div>
            </form>

            <!-- Log Out Form -->
            <form method="POST" action="/logout">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="<!-- Insert CSRF token here -->">
                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</body>
</html>
