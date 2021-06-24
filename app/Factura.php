<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Factura extends Model
{
    protected $table='invoice';

    protected $primaryKey='InvoiceId';

    public $timestamps= false;

    //relacion de muchos a muchos entre facturas y canciones
    public function canciones (){
        //Relacion de MM belongstoMany
        //1. Modelo a relacionar
        //2. Nombre de la tabla pivot
        //3. Clave foranea del presente modelo en la tabla pivot
        //4. Clave foranea del modelo relacionado con el pivot
        return $this->belongsToMany('App\Cancion', 'invoiceline' , 'InvoiceId' , 'TrackId');
    }
}
