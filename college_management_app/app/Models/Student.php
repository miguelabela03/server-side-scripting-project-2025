<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Enable mass assignment
    protected $fillable = ["name", "email", "phone", "dob", "college_id"];
}
