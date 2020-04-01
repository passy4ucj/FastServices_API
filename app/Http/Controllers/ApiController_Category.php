<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ApiController_Category extends Controller
{
    public function create(Request $request)
    {
        $categories = new Category();

        $categories->category = $request->input('category');

        $categories->save();
        return response()->json($categories);
    }
    public function show()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function showbyid($id)
    {
        $categories = Category::find($id);
        return response()->json($categories);
    }
    public function updatebyid(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->category = $request->input('category');

        $categories->save();
        return response()->json($categories);
    }
    public function deletebyid(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return response()->json($categories);
    }
}
