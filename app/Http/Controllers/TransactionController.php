<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::get();

        $data = [
            'title' => 'Home',
            'transactions' => $transactions
        ];

        return view('Transaction.index', $data);
    }
}
