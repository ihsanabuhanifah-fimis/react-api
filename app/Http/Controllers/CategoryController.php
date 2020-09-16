<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\UTS\CategoryResource;
use App\Http\Resources\UTS\CategoryCollection;


class CategoryController extends Controller
{
    public function create(Request $request)
    {
  

        $validasi = $request->validate([
            'category_name' => 'required|string',
            'img' => 'required ',
            
        ]);
      
        Category::create($validasi);
        return response()->json([
            'message' => 'Alhamdulilah berhasil'
        ], 201);
    }

    public function show($id)
    {
        if($id == 'all') {
            $category = Category::paginate(0);
        }else{
            $category = Category::paginate($id);
        }
       
        return new CategoryCollection($category);
    }
}
