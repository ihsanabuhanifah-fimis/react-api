<?php

namespace App\Http\Resources\UTS;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PopulerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'=> PopulerResource::collection($this->collection),
            
        ];
    }
}
