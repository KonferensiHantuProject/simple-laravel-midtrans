<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Transaction, Order};
use Illuminate\Support\Facades\DB;
use Throwable;

class MidtransWebhookController extends Controller
{
    public function index(Request $request) 
    {
        DB::beginTransaction();
        try{
            // Making Sure Webhook From Midtrans
            $hash = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . env('MIDTRANS_SERVER_KEY'));
    
            if($request->signature_key === $hash)
            {
                // Find Transaction
                $transaction = Transaction::where('midtrans_order_id', $request->order_id)->first();
    
                // Find Order
                $order = Order::find($transaction->order_id);
                $order->status = true;
                $order->save();
            }
    
            DB::commit();
        }catch(Throwable $e){
            DB::rollBack();
        }
    }
}
