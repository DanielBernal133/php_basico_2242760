<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artista extends Model
{
    protected $table='artist';

    protected $primaryKey='ArtistId';

    public $timestamps= false;

    //definir relacion entre artista y sus albunes
    public function discos(){
        //hasmany: parametro
        //1. modelo para hacer la relacion
        //2. Clave foranea modelo papa
        //3, Clave primaria del modelo hijo
        return $this->hasMany ('App\Disco' , 'ArtistId');
    }

    //definir una relación de multitabla entre artista y sus canciones.
    public function canciones (){
        //hasManyThroug = PARAMETROS
        //1.MODELO NIETO
        //2.MODELO PAPA
        //3.FK DEL ABUELO EN EL PAPA
        //4.FK DEL PAPA EN EL NIETO
        //5.CLAVE PRIMARIA DEL ABUELA
        //6.CLAVE PRIMARIA DEL PAPA
        return $this->hasManyThrough('App\Cancion' , //Modelo nieto
                                     'App\Disco' , //Modelo Papá
                                     'ArtistId', //Clave foranea del modelo nieto al modelo papá
                                     'AlbumId', //Clave Foranea del papa en el nieto
                                     'ArtistId',//Clave primaria de abuelo
                                     'AlbumId'); //Clave primaria del papá
    }
}
