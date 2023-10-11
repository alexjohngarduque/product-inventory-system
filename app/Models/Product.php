<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //add these lines of code based on the added columns of your created table (in this case name, quantity, price, description).
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'description'
    ];
}
