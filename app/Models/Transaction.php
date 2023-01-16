<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Nama Tabel
    protected $table = 'transactions';

    // primary key
    protected $primaryKey = 'id';

    // Fillable
    protected $fillable = ['order_id', 'midtrans_order_id', 'midtrans_transaction_id', 'midtrans_va_number', 'total','created_at', 'updated_at'];
}
