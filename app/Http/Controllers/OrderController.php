<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return Order::all();
    }


    public function store(Request $request)
    {
        $order = new Order;
        $order->client_id = $request->client_id;
        $order->ticket_id = $request->ticket_id;
        $order->purchase_date = $request->purchase_date;
        $order->save();

        return $order;
    }


    public function show(Order $order)
    {
        return $order;
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
