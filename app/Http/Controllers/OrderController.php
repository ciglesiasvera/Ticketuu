<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(Request $request)
    {
       // Verifica si se proporciona un ID de cliente en la solicitud
       if ($request->has('client_id')) {
        // Obtiene todas las órdenes filtradas por el ID de cliente
        $orders = Order::where('client_id', $request->client_id)->get();
    }   else {
        // Si no se proporciona un ID de cliente, devuelve todas las órdenes
        $orders = Order::all();
    }

        return $orders;
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
