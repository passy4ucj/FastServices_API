<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $clients = new Client();

        $clients->first_name = $request->input('first_name');
        $clients->last_name = $request->input('last_name');
        $clients->email = $request->input('email');
        $clients->password = $request->input('password');
        $clients->state = $request->input('state');
        $clients->address = $request->input('address');
        $clients->wallet = $request->input('wallet');

        $clients->save();
        return response()->json($clients);
    }
    public function show()
    {
        $clients = Client::all();
        return response()->json($clients);
    }
    public function showbyid($id)
    {
        $clients = Client::find($id);
        return response()->json($clients);
    }
    public function updatebyid(Request $request, $id)
    {
        $clients = Client::find($id);
        $clients->first_name = $request->input('first_name');
        $clients->last_name = $request->input('last_name');
        $clients->email = $request->input('email');
        $clients->password = $request->input('password');
        $clients->state = $request->input('state');
        $clients->address = $request->input('address');
        $clients->wallet = $request->input('wallet');

        $clients->save();
        return response()->json($clients);
    }
    public function deletebyid(Request $request, $id)
    {
        $clients = Client::find($id);
        $clients->delete();

        return response()->json($clients);
    }
}
