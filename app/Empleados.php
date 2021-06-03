<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table='employee';

    protected $primaryKey='EmployeeId';

    public $timestamps= false;

}
