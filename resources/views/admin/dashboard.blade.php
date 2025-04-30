<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Employee Dashboard</h1>

    <ul>
        @foreach ($employees as $employee)
            <li>{{ $employee->name }} - {{ $employee->email }}</li>
            <a href="{{ route('employee.edit', $employee->id) }}">Edit Employee</a><br>
            <a href="{{ route('employee.destroy', $employee->id) }}">Delete Employee</a>
        @endforeach
    </ul>
</body>
</html>
