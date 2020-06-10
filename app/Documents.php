<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Laravel\Scout\Searchable;

class Documents extends Model
{
    use SoftDeletes;


    // use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DocName', 'DocSrc', 'DocVersion', 'DocType', 'DocMime', 'DocOriginalName', 'DocSize', 'DocGeneral', 'DocPublisher', 'DocCodigo'
    ];

    public function areas()
    {
        return $this->belongsToMany('App\Areas','areas_documents');
        //Relación de la tabla areas y la tabla documentos 
    }

    public function user()
    {
        return $this->belongsTo('App\User','document_user');
        //Relación de la tabla documentos y la tabla usuarios 
    }

    public function procesos()
    {
        return $this->belongsToMany('App\Process','documents_processes');
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
