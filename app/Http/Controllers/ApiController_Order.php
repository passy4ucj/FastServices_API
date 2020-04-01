<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class ApiController_Order extends Controller
{
    public function create(Request $request)
    {
        $orders = new Order();

        $orders->client_no = $request->input('client_no');
        $orders->worker_no = $request->input('worker_no');
        $orders->service = $request->input('service');
        $orders->amount = $request->input('amount');
        $orders->status = $request->input('status');
        

        $orders->save();
        return response()->json($orders);
    }
    public function show()
    {
        $orders = Order::all();
        return response()->json($orders);
    }
    public function showbyid($id)
    {
        $orders = Order::find($id);
        return response()->json($orders);
    }
    public function updatebyid(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->client_no = $request->input('client_no');
        $orders->worker_no = $request->input('worker_no');
        $orders->service = $request->input('service');
        $orders->amount = $request->input('amount');
        $orders->status = $request->input('status');

        $orders->save();
        return response()->json($orders);
    }
    public function deletebyid(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->delete();

        return response()->json($orders);
    }
}
