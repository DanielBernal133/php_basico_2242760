<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlits extends Model
{
    protected $table='playlist';

    protected $primaryKey='PlaylistId';

    public $timestamps= false;


    //Relacion muchoas a muchos con canciones
    public function canciones (){
        //metodo: belongsToMany
        return $this->belongsToMany('App\Cancion' ,
                                    'playlisttrack', //Nombre de la tabla intermedia);
                                    'PlaylistId', //Clave primaria de la salida
                                    'TrackId'); //Clave primaria del destino
    }
}
