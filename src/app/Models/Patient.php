<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'date_of_birth',
        'gender',
        'phone',
        'address',
        'allergy',
    ];
}
