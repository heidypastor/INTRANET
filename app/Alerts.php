<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AlertName', 'AlertDateEvent', 'AlertDescription', 'AlertDateNotifi', 'AlertNotification',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
        //Relación de la tabla areas y la tabla usuarios
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
