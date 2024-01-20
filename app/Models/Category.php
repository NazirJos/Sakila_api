<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";
    protected $fillable = [
        "name",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "category_id";
}
