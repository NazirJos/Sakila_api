<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table = "actor";
    protected $fillable = [
        "first_name",
        "last_name",
        "last_update",
        "photo"
    ];
    public $timestamps = false;
    protected $primaryKey = "actor_id";
}
