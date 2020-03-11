<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Comites extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ComiName', 'ComiSrc', 'ComiImage', 'ComiParaQueSirve', 'ComiTelefono', 'ComiEmail', 'ComiDateLast', 'ComiObservations', 'ComiDateNext', 'ComiIntegrantes',
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

    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

}
