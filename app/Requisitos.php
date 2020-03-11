<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Requisitos extends Model
{
    use SoftDeletes;

    // use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ReqName', 'ReqType', 'ReqDate', 'ReqEnte', 'ReqQueDice',  
    ];


    public function areas()
    {
        return $this->belongsToMany('App\Areas')->withTimestamps();
        //Relación de la tabla areas y la tabla requisitos 
    }


    public function procesos()
    {
        return $this->belongsToMany('App\Process', 'processes_requisitos')->withTimestamps();
        //Relación de la tabla processes y la tabla requisitos 
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

    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

}
