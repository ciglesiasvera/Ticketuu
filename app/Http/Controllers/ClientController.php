<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        return Client::all();
    }


    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();

        return $client;

    }


    public function show(Client $client)
    {
        return $client;
    }


    public function update(Request $request, Client $client)
    {
        //
    }


    public function destroy(Client $client)
    {
        //
    }
}
