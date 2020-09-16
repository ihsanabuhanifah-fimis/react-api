<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Populer;
use App\Http\Resources\UTS\PopulerResource;
use App\Http\Resources\UTS\PopulerCollection;

class PopulerController extends Controller
{
    public function create(Request $request)
    {
  
        
        $validasi = $request->validate([
            'category_id' => 'required',
            'populer_jumlah' => 'required ',
            'populer_name' => 'required ',
            'populer_harga' => 'required ',
            'populer_waktu' => 'required ',
            'populer_rating' => 'required ',
            'populer_img' => 'required'
            
        ]);
      
        Populer::create($validasi);
        return response()->json([
            'message' => 'Alhamdulilah berhasil'
        ], 201);
    }

    public function index($id)
    {
        if($id === 'all'){
            $populer = Populer::paginate(0);
        }else{
            $populer = Populer::paginate($id);
        }
       
        return new PopulerCollection($populer);
    }

    public function show(Request $request)
    {
       if($request->paginate == 'all'){
        $makanan = Populer::where('category_id', $request->category_id)->paginate();
       }else{
        $makanan = Populer::where('category_id', $request->category_id)->paginate($request->paginate);
       }
        return New PopulerCollection($makanan);
    }
}
