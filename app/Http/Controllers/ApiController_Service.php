<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ApiController_Service extends Controller
{
    public function create(Request $request)
    {
        $services = new Service();

        $services->category_id = $request->input('category_id');
        $services->service = $request->input('service');

        $services->save();
        return response()->json($services);
    }
    public function show()
    {
        $services = Service::all();
        return response()->json($services);
    }
    public function showbyid($id)
    {
        $services = Service::find($id);
        return response()->json($services);
    }
    public function updatebyid(Request $request, $id)
    {
        $services = Service::find($id);
        $services->category_id = $request->input('category_id');
        $services->service = $request->input('service');

        $services->save();
        return response()->json($services);
    }
    public function deletebyid(Request $request, $id)
    {
        $services = Service::find($id);
        $services->delete();

        return response()->json($services);
    }
}
