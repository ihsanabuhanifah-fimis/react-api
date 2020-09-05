<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function identitas()
    {
        return $this->hasOne('App\Identitas');
    }
    protected $fillable = [
        'name', 'email', 'password', 'username', 'api_token','jenis_kelamin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Saat Input data
    public function setJenisKelaminAttribute($value)
    {
        switch($value){
            case "laki-laki" :
                $this->attributes['jenis_kelamin'] = 1;
                break;
            case "perempuan" :
                $this->attributes['jenis_kelamin'] = 2;
                break;
        }
        
    }
    //Saat Get data
    public function getJenisKelaminAttribute($value)
    {
        switch($value){
            case 1 :
                return "laki-laki";
                break;
            case 2 :
                return "perempuan";
                break;
        }
        
    }
}
