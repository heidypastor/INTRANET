<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;


class Process extends Model
{
    use SoftDeletes;
	use HasRoles;
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
	    'ProcParticipantes',
	    'ProcElaboro',
	    'ProcReviso',
        'ProcAprobo',
        'ProcDate',
        'ProcAlcance',
        'ProcAmbienTrabajo',
        'ProcPolitOperacion',
        'ProcRiesgos'
    ];
    
    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['recursos', 'gseguridads', 'gambientals', 'requisitos', 'procesosDeSoporte', 'indicadores', 'clientes', 'proveedores', 'entradas', 'salidas', 'documentos', 'actividades', 'documentos', 'areas', ];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $table = 'processes';


    public function clientes()
    {
        return $this->belongsToMany('App\Cliente','clientes_processes');
        //Relación de la tabla processes y la tabla inputs 
    }

    
    public function proveedores()
    {
        return $this->belongsToMany('App\Proveedor','processes_proveedors');
        //Relación de la tabla processes y la tabla inputs 
    }

	public function entradas()
    {
        return $this->belongsToMany('App\Input','inputs_processes');
        //Relación de la tabla processes y la tabla inputs 
    }


    public function salidas()
    {
        return $this->belongsToMany('App\Output','processes_outputs');
        //Relación de la tabla processes y la tabla inputs 
    }


    public function actividades()
    {
        return $this->belongsToMany('App\Activity','activities_processes');
        //Relación de la tabla processes y la tabla inputs 
    }


    public function documentos()
    {
        return $this->belongsToMany('App\Documents','documents_processes');
        //Relación de la tabla processes y la tabla inputs 
    }


    public function areas()
    {
        return $this->belongsToMany('App\Areas','areas_processes');
        //Relación de la tabla processes y la tabla inputs 
    }


    public function indicadores()
    {
        return $this->belongsToMany('App\Indicators','indicators_processes');
        //Relación de la tabla processes y la tabla inputs 
    }


    public function procesosDeSoporte()
    {
        return $this->belongsToMany('App\Process', 'processes_processes', 'process_id', 'supportProcess_id');
        //Relación de la tabla processes y la tabla inputs 
    }

    public function requisitos()
    {
        return $this->belongsToMany('App\Requisitos', 'processes_requisitos');
        //Relación de la tabla processes y la tabla inputs 
    }

    // public function seguimientos()
    // {
    //     return $this->belongsToMany('App\Seguimiento','processes_seguimientos');
    //     //Relación de la tabla processes y la tabla inputs 
    // }

    public function gambientals()
    {
        return $this->belongsToMany('App\Gambiental','gambientals_processes');
        //Relación de la tabla processes y la tabla gambiental 
    }

    public function gseguridads()
    {
        return $this->belongsToMany('App\Gseguridad','gseguridads_processes');
        //Relación de la tabla processes y la tabla gseguridad 
    }

    public function recursos()
    {
        return $this->belongsToMany('App\Recursos','processes_recursos');
        //Relación de la tabla processes y la tabla recursos 
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
	    'ProcResponsable' => 'array',
        'ProcPolitOperacion' => 'array',
        'ProcRiesgos' => 'array',
        'ProcParticipantes' => 'array'
    ];
    
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

}
