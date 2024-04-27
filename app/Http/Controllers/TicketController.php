<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        return Ticket::all();
    }


    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket->event_id = $request->event_id;
        $ticket->price = $request->price;
        $ticket->quantity = $request->quantity;
        $ticket->save();

        return $ticket;
    }


    public function show(Ticket $ticket)
    {
        return $ticket;
    }


    public function update(Request $request, Ticket $ticket)
    {
        //
    }


    public function destroy(Ticket $ticket)
    {
        //
    }
}
