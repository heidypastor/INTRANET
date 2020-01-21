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
	    'ProcAprobo',
	    
	];

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
