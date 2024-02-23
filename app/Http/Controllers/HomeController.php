<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()//para controlar una unica ruta
    {     
        return view('home');
    }
}
