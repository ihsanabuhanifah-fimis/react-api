<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        [
            
          
            'username' => $this->username,
            'email' => $this->email,
            'name'=> $this->name,  
            'jenis_kelamin' => $this->jenis_kelamin,
            'stored_at' => $this ->  created_at->diffForHumans(),
           
        ];
    }
}
