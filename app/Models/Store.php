<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = "store";
    protected $fillable = [
        "manager_staff_id",
        "address_id",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "store_id";
}
