<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Order\StoreOrder;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Throwable;

class OrderController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Order',
        ];

        return view('Order.index', $data);
    }

    public function store(StoreOrder $request)
    {
        DB::beginTransaction();
        try{

            $data_order = [
                'name' => $request->input('name'),
                'food' => $request->input('food'),
                'extra_fee' => $request->input('extra'),
            ];
   
            //Create Order
            Order::create($data_order);
            
            DB::commit();

            return redirect('/order');

        }catch(Throwable $e) {
            DB::rollBack();
            dd($e);
            return redirect('/order');  
        }
    }
}
