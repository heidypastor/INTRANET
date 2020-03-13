<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Seguimiento extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SeguiName', 
    ];

    public function procesos()
    {
        return $this->belongsToMany('App\Process','processes_seguimientos');
        //Relación de la tabla processes y la tabla seguimientos 
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
