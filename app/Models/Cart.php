<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = "cart_id";
    protected $table = "carts";

    protected $fillable = [
    
        'product_id',
        'quantity',
        'userId',
    ];

    public function products() {

        return $this->hasOne(Product::class,'product_id');
        
    }
}
