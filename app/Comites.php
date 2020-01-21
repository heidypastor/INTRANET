<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comites extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ComiName', 'ComiSrc', 'ComiImage', 'ComiParaQueSirve', 'ComiTelefono', 'ComiEmail', 
    ];


    public function users()
    {
        return $this->belongsToMany('App\User');
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
