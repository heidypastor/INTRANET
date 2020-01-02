<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicators extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IndName', 'IndObjective', 'IndQueMide', 'IndGraphic', 'IndTable', 'IndDateFrom', 'IndDateUntil', 
    ];

    public function areas()
    {
        return $this->belongsToMany('App\Areas','area_indicator');
        //Relación de la tabla areas y la tabla indicadores 
    }

    public function user()
    {
        return $this->belongsTo('App\User','indicator_user');
        //Relación de la tabla indicadores y la tabla usuarios 
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
