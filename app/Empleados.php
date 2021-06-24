<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table='employee';

    protected $primaryKey='EmployeeId';

    public $timestamps= false;

    //Relacion de uno a muchos con clientes.
    public function clientes() {
        return $this->hasMany('App\Cliente' , 'SupportRepId');
    }
    //Relacion entre empleados y facturas: 1 a muchos con facturas a traves del cliente
    public function facturas () {
        return $this->hasManyThrough('App\Factura' ,
                                     'App\Cliente',
                                     'SupportRepId',
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId');
    }
}
