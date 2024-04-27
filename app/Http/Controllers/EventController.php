<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        return Event::all();
    }


    public function store(Request $request)
    {
        $event = new Event;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->save();

        return $event;
    }


    public function show($id)
    {
        $event = Event::find($id);
        return $event;
    }


    public function update(Request $request, Event $event)
    {
        //
    }


    public function destroy(Event $event)
    {
        //
    }
}
