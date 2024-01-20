<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = "inventory";
    protected $fillable = [
        "film_id",
        "store_id",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "inventory_id";
}
