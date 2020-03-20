<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Spatie\Permission\Traits\HasRoles;
// use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    // use Searchable;
    
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

    public function cargos()
    {
        return $this->belongsToMany('App\Cargo','cargos_users');
        //Relación de la tabla documents y la tabla usuarios 
    }

    public function areas()
    {
        return $this->belongsTo('App\Areas');
        //Relación de la tabla documents y la tabla usuarios 
    }

    public function releases()
    {
        return $this->hasMany('App\Releases');
        //Relación de la tabla releases y la tabla usuarios 
    }

    public function comites()
    {
        return $this->belongsToMany('App\Comites');
    }

    public function alerts()
    {
        return $this->hasMany('App\Alerts');
        //Relación de la tabla areas y la tabla usearios
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
