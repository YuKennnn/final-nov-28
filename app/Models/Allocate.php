<?php

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Allocate extends Model
{
    use HasFactory, SoftDeletes; 

    
    protected $table = 'allocate';  

    // Mass assignable fields
    protected $fillable = [
        'locker_number',
        'student_id',
        'last_name',
        'first_name',
        'program',
        'year_set',
        'date_rented',
        'date_ended',
        'email',
        'payment',
    ];

    // Cast specific attributes
    protected $casts = [
        'date_rented' => 'datetime',  
        'date_ended' => 'datetime',  
        'payment' => 'decimal:2',    
    ];
}
