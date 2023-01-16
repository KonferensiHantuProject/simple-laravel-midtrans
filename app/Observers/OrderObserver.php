<?php

namespace App\Observers;

use App\Models\{Order, Transaction};
use Illuminate\Support\Facades\Log;
use App\Helpers\MidtransHelper;
use Illuminate\Support\Facades\DB;
use Throwable;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        DB::beginTransaction();
        try {

            // Create Order in Midtrans
            $params = [
                'json' => [
                    'payment_type' => 'bank_transfer',
                    'bank_transfer' => json_decode(json_encode(["bank" => "bni"])),
                    'transaction_details' => json_decode(json_encode(["order_id" => time(), "gross_amount" => 10000 + $order->extra_fee])),
                ]
            ];

            $transaction = MidtransHelper::createTransaction($params);

            $save_transaction = new Transaction;
            $save_transaction->midtrans_transaction_id = $transaction->transaction_id;
            $save_transaction->midtrans_order_id = $transaction->order_id;
            $save_transaction->midtrans_va_number = $transaction->va_numbers[0]->va_number;
            $save_transaction->total = $transaction->gross_amount;
            $save_transaction->order_id = $order->id;
            $save_transaction->save();

            DB::commit();
        } catch (Throwable $e) {
            DB::rollback();
        }
    }
}
