<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='customer';

    protected $primaryKey='CustomerId';

    public $timestamps= false;


    public function facturas (){
        //Utilizo el metodo eloquent: has many
        return $this->hasMany('App\Factura' , 'CustomerId');
    }
}

