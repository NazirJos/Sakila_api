<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staff";
    protected $fillable = [
        "first_name",
        "last_name",
        "address_id",
        "picture",
        "email",
        "store_id",
        "active",
        "username",
        "password",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "staff_id";
}
