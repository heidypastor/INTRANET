<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambiental extends Model
{
    // use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'GesName', 'GesType', 
    ];


    public function procesos()
    {
        return $this->belongsToMany('App\Process','gambientals_processes');
        //Relación de la tabla processes y la tabla gambiental 
    }



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];
}
