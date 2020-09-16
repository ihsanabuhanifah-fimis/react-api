<?php

namespace App\Http\Resources\UTS;

use Illuminate\Http\Resources\Json\JsonResource;

class PopulerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       
        return [
            
            'name' => $this-> populer_name,
            'harga'=>$this-> populer_harga,
            'waktu' => $this->populer_waktu,
            'jumlah' => $this-> populer_jumlah,
            'rating' => $this-> populer_rating,
            'image' =>  "https://belajar-react.smkmadinatulquran.sch.id/". $this-> populer_img,
            'pesan' => ''
            
        ];
    }
}
