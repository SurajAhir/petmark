<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $primaryKey = "address_id";
    protected $table = "addresses";

    protected $fillable=[
        "firstName",
        "lastName",
        'companyName',
        'country',
        'email',
        'phoneNumber',
        'address',
        'city',
        'state',
        'zipCode',
        'userId'

    ];
}
