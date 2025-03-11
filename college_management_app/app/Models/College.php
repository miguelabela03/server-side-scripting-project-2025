<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    // Enable mass assignment
    protected $fillable = ["name", "address"];

    // Defining the relationship with the Studnet model
    // A college can have multiple students, therefore hasMany() relationship
    public function students() {
        return $this->hasMany(Student::class);
    }
}
