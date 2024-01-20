<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";
    protected $fillable = [
        "store_id",
        "first_name",
        "last_name",
        "email",
        "address_id",
        "active",
        "create_date",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "customer_id";
}
