<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Laravel\Scout\Searchable;

class Indicators extends Model
{
    use SoftDeletes;

    // use Searchable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IndName', 'IndObjective', 'IndDescripcion', 'IndFormula', 'IndGraphic', 'IndTable', 'IndAnalysis',  'IndDateFrom', 'IndDateUntil', 'IndFrecuencia', 'IndMeta', 'IndFicha'
    ];

    protected $attributes = [
        'IndDescripcion' => 'Sin definir',
        'IndFormula' => 'Sin definir',
        'IndMeta' => 'Sin definir',
        'IndFicha' => 'Sin definir',
    ];

    public function areas()
    {
        return $this->belongsToMany('App\Areas');
        //Relación de la tabla areas y la tabla indicadores 
    }

    public function user()
    {
        return $this->belongsTo('App\User');
        //Relación de la tabla indicadores y la tabla usuarios 
    }

    public function procesos()
    {
        return $this->belongsToMany('App\Process','indicators_processes');
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
