<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Methode voor de Homepagina
    public function home()
    {
        return view('home');
    }

    // Methode voor de Over Ons pagina
    public function about()
    {
        return view('about');
    }

    // Methode voor de Contactpagina
    public function contact()
    {
        return view('contact');
    }
}

