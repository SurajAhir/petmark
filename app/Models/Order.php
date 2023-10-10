<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    
    protected $primaryKey = "id";
    protected $table = "orders";

    protected $fillable = [
        'item_name',
        'total_price',
        'item_quantity',
        'userId',
        'order_status',
        'address_id'
    ];
}
