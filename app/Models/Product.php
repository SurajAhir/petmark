<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey="product_id";
    protected $table='products';

    protected $fillable = [
        'name',
        'description',
        'colours',
        'price',
        'images',
        'cat_id',
    ];

}
