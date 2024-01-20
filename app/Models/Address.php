<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = "address";
    protected $fillable = [
        "address",
        "address2",
        "district",
        "city_id",
        "postal_code",
        "phone",
        "location",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "address_id";
}
