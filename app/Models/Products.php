<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_model',
        'product_description',
        'price'
    ];


}
