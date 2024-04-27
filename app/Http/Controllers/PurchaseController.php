<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Ticket;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order();
        $order->client_id = $request->input('client_id');
        $order->ticket_id = $request->input('ticket_id');
        $order->purchase_date = now();
        $order->save();
        return response()->json($order);
    }
}
