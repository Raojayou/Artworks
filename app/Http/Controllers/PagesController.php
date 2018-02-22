<?php

namespace App\Http\Controllers;

use App\Museo;
use App\Obra;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Genera la página de inicio del proyecto.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
        $museos = Museo::orderBy('created_at', 'desc')->paginate(9);
        $obras = Obra::orderBy('created_at', 'desc')->paginate(9);
        return view('home', [
            'museos' => $museos,
            'obras' => $obras,
        ]);
    }
    /**
     * Página de saludo.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function saludo(){
        $saludo = "Bienvenidos a Artworks";
        $usuario = "Josan";
        return view('saludo', [
            'saludo' => $saludo,
            'usuario'=> $usuario
        ]);
    }
}
