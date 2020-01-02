<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'Avatar', 'ColorUser', 
    ];

    public function indicators()
    {
        return $this->hasMany('App\Indicators','indicator_user');
        //Relación de la tabla indicadores y la tabla usuarios 
    }

    public function documents()
    {
        return $this->hasMany('App\Documents','document_user');
        //Relación de la tabla documents y la tabla usuarios 
    }

    public function area()
    {
        return $this->belongsTo('App\Areas','area_user');
        //Relación de la tabla documents y la tabla usuarios 
    }

    public function releases()
    {
        return $this->hasMany('App\Releases','release_user');
        //Relación de la tabla releases y la tabla usuarios 
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
