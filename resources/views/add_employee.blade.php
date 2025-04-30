<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add New Employee
            </h2>
        </div>
    </header>

    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <!-- Employee Add Form -->
                        <form method="POST" action="{{ route('employee.store') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700">Name</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('name') }}" required>
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Email</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('email') }}" required>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

            
                            <div class="mb-4">
                                <label for="phone_number" class="block text-gray-700">phone number</label>
                                <input type="text" name="phone_number" id="phone_number" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="company" class="block text-gray-700">Company</label>
                                <input type="number" name="company_id" id="company_id" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('company_id') }}">
                                @error('position')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="role" class="block text-gray-700">Role</label>
                                <input type="text" name="role" id="role" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('company_id') }}">
                                @error('position')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="address" class="block text-gray-700">address</label>
                                <input type="text" name="address" id="address" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('address') }}">
                                @error('position')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                                    Add Employee
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
