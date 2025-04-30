<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="container">
        <h1>Employee Dashboard</h1>

        <div class="employee-list">
            @foreach ($employees as $employee)
                <div class="employee-card">
                    <div class="employee-info">
                        <strong>{{ $employee->name }}</strong><br>
                        <span>{{ $employee->email }}</span>
                    </div>
                    <div class="employee-actions">
                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn edit">Edit</a>
                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</body>
</html>
