<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMuseoRequest;
use App\Museo;
use App\User;

use Illuminate\Http\Request;

class MuseosController extends Controller
{
    /**
     * Método que muestra la información de un mensaje. Utiliza Route Binding
     * para conseguir el museo facilitado por el parámetro.
     *
     * @param Museo $museo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $museo = Museo::where('id', $id)->first();

        return view('museos.show', [
            'museo' => $museo,

        ]);
    }

    /**
     * Método para mostrar el formulario de alta de un nuevo museo.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('museos.create');
    }

    /**
     * Guarda en la base de datos la información facilitada para un nuevo museo.
     * Utiliza la definición personalizada de un Request para validar los datos.
     *
     * @param CreateMuseoRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateMuseoRequest $request)
    {

        $user = $request->user();

        Museo::create([
            'user_id' => $user->id,
            'name' => $request->input('name'),
            'horario_apertura' => $request->input('horario_apertura'),
            'horario_cierre' => $request->input('horario_cierre'),
            'web' => $request->input('web'),
            'social' => $request->input('social'),
            'type' => $request->input('type'),
            'period' => $request->input('period'),
            'description' => $request->input('description'),
        ]);
        return redirect('/');
    }
}