<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmCategory extends Model
{
    use HasFactory;

    protected $table = "film_category";
    protected $fillable = [
        "category_id",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "film_id";
}
