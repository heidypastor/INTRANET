<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Documents extends Model
{

    use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DocName', 'DocSrc', 'DocVersion', 'DocType', 'DocMime', 'DocOriginalName', 'DocSize', 'DocGeneral', 'DocPublisher',  
    ];

    public function areas()
    {
        return $this->belongsToMany('App\Areas','area_document');
        //Relación de la tabla areas y la tabla documentos 
    }

    public function user()
    {
        return $this->belongsTo('App\User','document_user');
        //Relación de la tabla documentos y la tabla usuarios 
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
