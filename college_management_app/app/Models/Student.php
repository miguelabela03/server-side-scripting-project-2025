<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Enable mass assignment
    protected $fillable = ["name", "email", "phone", "dob", "college_id"];

    // Defining the relationship with the College model
    // A student can only be in one college, therefore a student belongsTo() one college
    public function college() {
        return $this->belongsTo(College::class);
    }
}
