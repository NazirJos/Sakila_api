<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = "language";
    protected $fillable = [
        "name",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "language_id";
}
