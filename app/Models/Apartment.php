<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'rooms', 'price', 'square', 'floor', 'address', 'image_plan', 'image_final_view', 'description',
    ];

}