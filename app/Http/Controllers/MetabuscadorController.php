<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //accion para mostrar el formulario de busqueda
    public function formulario_buscador(){
        return view('metabuscador');
    }

    //accion para realizar la busqueda
    public function buscar(){
        //Datos llegan al arreglo $_POST
        $termino = $_POST ["termino"];
        $motor = $_POST ["motores"];
        //redireccionar al motor correcto, junto al termino
        switch($motor){
            case 1: return redirect()-> to("https://www.google.com/search?q=$termino");//Para redirijir al buscador
                break;
            case 2:return redirect()-> to("https://www.bing.com/search?q=$termino");
                break;
            case 3:return redirect()-> to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4:return redirect()-> to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 5:return redirect()-> to("https://yandex.com/search/?text=$termino");
                break;
            case 6:return redirect()-> to("https://www.epicgames.com/store/es-ES/browse?q=$termino");
                break;
            case 7:return redirect()-> to("https://www.falabella.com.co/falabella-co/search?Ntt=$termino");
                break;
            case 8:return redirect()-> to("https://www.exito.com/search?_query=$termino");
                break;
            case 9:return redirect()-> to("https://www.alkosto.com/search/?text=$termino");
                break;
            case 10:return redirect()-> to("https://search.aol.com/aol/search?q=$termino");
                break;

        }


    }

}
