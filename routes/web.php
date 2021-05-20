<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('variables', function () {
    $mensaje = 10;
    var_dump ($mensaje);
    echo "Hola";
});

Route::get('arreglos' , function(){
    //Arreglo: Estructura de datos
    $estudiante = [ "LU" => "Luis" , "DA" => "Daniel" , "JO" => "José"  ];
    echo "<pre>";
    print_r($estudiante);
echo "</pre>";
});


Route::get('paises', function () {

    $paises = [
    "Colombia" => [
            "capital" => "Bogotá",
            "Moneda" => "Peso",
            "poblacion" => 50.34
    ], "Peru" => [
            "capital" => "Lima",
            "Moneda" => "Sol",
            "poblacion" => 32.82
    ], "Paraguay" => [
            "capital" => "Asunción",
            "Moneda" => "Guarani Paraguayo",
            "poblacion" => 7.045
    ]
        ];


//invocar la vista
//levando los datos a la vista
return view("paises")->with("naciones" , $paises );


});
Route::get('formulario_buscador' , "MetabuscadorController@formulario_buscador");

Route::post('buscar' , "MetabuscadorController@buscar");



