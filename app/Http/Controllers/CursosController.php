<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //metodo para mostrar la pagina principal de los cursos
    public function index(){
        return view('cursos.index');
    }
    //metodo para mostrar el formulario para crear un nuevo curso
    public function create (){
        return view('cursos.create');
    }

    //metodo pra mostrar la informacion de un cursos en especifico
    public function show($curso){
        return view('cursos.show',compact('curso'));
    }
}
