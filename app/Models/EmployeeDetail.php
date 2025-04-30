<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class EmployeeDetail extends Model
{
    use HasFactory;

    protected $table = 'employee_details';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'company_id',
        'address'
        



    ];
    
}

