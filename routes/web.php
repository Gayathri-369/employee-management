<?php


use App\Http\Controllers\EmployeeDetailController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->get('/employee/add', function () {
    return view('add_employee');
})->name('employee.add');




Route::middleware('auth')->group(function () {
    
    Route::get('/employee-details', [EmployeeDetailController::class, 'index'])->name('employee_details');

    Route::post('/employee/store', [EmployeeDetailController::class, 'store'])->name('employee.store');
    
    Route::get('/employee/{id}/edit', [EmployeeDetailController::class, 'edit'])->name('employee.edit');

    Route::put('/employee/{id}/update', [EmployeeDetailController::class, 'update'])->name('employee.update');

    Route::delete('/employee/{id}',[EmployeeDetailController::class, 'destroy'])->name('employee.destroy');
    ;


    
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





require __DIR__.'/auth.php';
