<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit employee</title>
</head>
<body>
    <form action="{{ route('employee.update', $employee->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$employee->name}}">
        <input type="email" name="email" value="{{$employee->email}}">
        <input type="number" name="phone_number" value="{{ $employee->phone_number }}">
        <button type="submit">Update Employee</button>
    </form>
</body>
</html>