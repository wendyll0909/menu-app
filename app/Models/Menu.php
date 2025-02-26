<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Define fillable fields
    protected $fillable = [
        'dish_name',
        'description',
        'price',
        'category',
    ];
}