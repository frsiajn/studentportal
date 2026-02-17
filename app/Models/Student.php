<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    // This tells Laravel which fields can be filled via forms
    protected $fillable = [
        'name',
        'email', 
        'course',
        'year_level'
    ];
}
