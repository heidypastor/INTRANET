<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Areas extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AreaName', 'AreaSede', 
    ];

    public function documents()
    {
        return $this->belongsToMany('App\Documents')->withTimestamps();
        //Relación de la tabla areas y la tabla documentos 
    }

    public function requisitos()
    {
        return $this->belongsToMany('App\Requisitos')->withTimestamps();
        //Relación de la tabla areas y la tabla requisitos 
    }

    public function indicators()
    {
        return $this->belongsToMany('App\Indicators','area_indicator');
        //Relación de la tabla areas y la tabla indicadores
    }

    public function users()
    {
        return $this->hasMany('App\User');
        //Relación de la tabla areas y la tabla indicadores
    }

    public function procesos()
    {
        return $this->belongsToMany('App\Process','areas_processes');
        //Relación de la tabla processes y la tabla inputs 
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
