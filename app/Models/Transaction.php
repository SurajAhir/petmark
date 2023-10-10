<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "transactions";

    protected $fillable = [
        'item_name',
        'item_price',
        'item_quantity',
        'userId',
        'paid_status',
        'order_id',
        'transaction_id',
        'address_id'
    ];
}
