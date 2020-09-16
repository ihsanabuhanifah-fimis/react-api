<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Populer extends Model
{
    protected $fillable = [
        'category_id', 
        'populer_jumlah', 
        'populer_name', 
        'populer_harga', 
        'populer_waktu', 
        'populer_rating',
        'populer_img'
    ];

    public function category(){
        return $this->belongTo('App/Category');
    }
}
