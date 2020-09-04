<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Identitas;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;

class UserController extends Controller
{
    public function create(Request $request)
    {
  
        $validasi = $request->validate([
            'user_id' => 'required',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required | max:2 ',
            'bulan_lahir' => 'required | max:4 ',
            'tahun_lahir' => 'required | max:4',
            'alamat' => 'required',
            'nomor_handphone' => 'required'
        ]);
      
        Identitas::create($validasi);
        return response()->json([
            'message' => 'Alhamdulilah berhasil'
        ], 201);
        
    }

    public function detail($id)
    {
        $detail = User::find($id);
        return new UserResource($detail);
    }

    public function show($id)
    {
        $users = User::orderBy('id', 'DESC')->paginate($id);
        return new UserCollection($users);
    }
    public function update(Request $request)
    {
        $update = User::where('username', $request->username)->first()->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);
        return response()->json($update, 200);
         
       
        
    }
    

    public function cari(Request $request)
    {
        if($request->cari == NULL)
        {
            $cari = User::paginate(5);
        }else 
        {
            $cari = User::where('name', 'like', "%".$request->cari."%")
            ->orWhere('username', 'like', "%".$request->cari."%")
            ->paginate(0);
        }
        
        return new UserCollection($cari);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json("ok", 200);
    }
}
