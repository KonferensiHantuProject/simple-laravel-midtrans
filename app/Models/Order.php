<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Nama Tabel
    protected $table = 'orders';

    // primary key
    protected $primaryKey = 'id';

    // Fillable
    protected $fillable = ['name', 'food', 'extra_fee', 'status', 'created_at', 'updated_at'];
}
