<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings'; // Ensure this matches your database table name
    
    protected $fillable = [
        'image', // Add any other fillable fields
    ];
}