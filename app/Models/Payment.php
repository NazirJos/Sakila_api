<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payment";
    protected $fillable = [
        "customer_id",
        "staff_id",
        "rental_id",
        "amount",
        "payment_date",
        "last_update"
    ];
    public $timestamps = false;
    protected $primaryKey = "payment_id";
}
