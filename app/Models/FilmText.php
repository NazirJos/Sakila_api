<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmText extends Model
{
    use HasFactory;

    protected $table = "film_text";
    protected $fillable = [
        "title",
        "description"
    ];
    public $timestamps = false;
    protected $primaryKey = "film_id";
}
