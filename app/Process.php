<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'ProcName',
	    'ProcRevVersion',
	    'ProcChangesDescription',
	    'ProcImage',
	    'ProcObjetivo',
	    'ProcResponsable',
	    'ProcAutoridad',
	    'ProcRecursos',
	    'ProcRequsitos',
	    'ProcElaboro',
	    'ProcReviso',
	    'ProcAprobo'
	];

	public function entradas()
    {
        return $this->belongsToMany('App\Input','inputs_processes');
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
}
