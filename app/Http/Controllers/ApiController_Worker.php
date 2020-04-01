<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class ApiController_Worker extends Controller
{
    public function create(Request $request)
    {
        $workers = new Worker();

        $workers->first_name = $request->input('first_name');
        $workers->last_name = $request->input('last_name');
        $workers->service_type = $request->input('service_type');
        $workers->email = $request->input('email');
        $workers->password = $request->input('password');
        $workers->state = $request->input('state');
        $workers->address = $request->input('address');
        $workers->id_number = $request->input('id_number');
        $workers->wallet = $request->input('wallet');

        $workers->save();
        return response()->json($workers);
    }
    public function show()
    {
        $workers = Worker::all();
        return response()->json($workers);
    }
    public function showbyid($id)
    {
        $workers = Worker::find($id);
        return response()->json($workers);
    }
    public function updatebyid(Request $request, $id)
    {
        $workers = Worker::find($id);
        $workers->first_name = $request->input('first_name');
        $workers->last_name = $request->input('last_name');
        $workers->service_type = $request->input('service_type');
        $workers->email = $request->input('email');
        $workers->password = $request->input('password');
        $workers->state = $request->input('state');
        $workers->address = $request->input('address');
        $workers->id_number = $request->input('id_number');
        $workers->wallet = $request->input('wallet');

        $workers->save();
        return response()->json($workers);
    }
    public function deletebyid(Request $request, $id)
    {
        $workers = Worker::find($id);
        $workers->delete();

        return response()->json($workers);
    }
}
