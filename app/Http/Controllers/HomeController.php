<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class HomeController extends Controller
{
    //crear el metodo principal del aplicativo
    public function __invoke()
    {
        return view('home');
    }

}

