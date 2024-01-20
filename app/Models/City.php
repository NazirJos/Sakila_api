<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = "city";
    protected $fillable = [
        "city",
        "country_id"
    ];
    public $timestamps = false;
    protected $primaryKey = "city_id";
}
