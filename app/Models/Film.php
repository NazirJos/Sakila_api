<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = "film";
    protected $fillable = [
        "title",
        "description",
        "release_year",
        "language_id",
        "original_language_id",
        "rental_duration",
        "rental_rate",
        "length",
        "replacement_cost",
        "rating",
        "special_features",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "film_id";
}
