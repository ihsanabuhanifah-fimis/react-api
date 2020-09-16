<?php

namespace App\Http\Resources\UTS;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'name' => $this-> category_name,
            'img' => "https://belajar-react.smkmadinatulquran.sch.id/". $this->img
        ];
    }
}
