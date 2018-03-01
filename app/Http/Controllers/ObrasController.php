<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObraAjaxRequest;
use App\Http\Requests\CreateObraRequest;
use App\Obra;
use App\User;

use Illuminate\Http\Request;

class ObrasController extends Controller
{
    /**
     * Método que muestra la información de un mensaje. Utiliza Route Binding
     * para conseguir la obra facilitada por el parámetro.
     *
     * @param Obra $obra
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $obra = Obra::find($id);

        return view('obras.show', [
            'obra' => $obra,

        ]);
    }
    /**
     * Método para mostrar el formulario de alta de una nueva obra.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('obras.create');
    }
    /**
     * Guarda en la base de datos la información facilitada para una nueva obra.
     * Utiliza la definición personalizada de un Request para validar los datos.
     *
     * @param CreateObraRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateObraRequest $request){

        $user = $request->user();

        Obra::create([
            'user_id'   => $user->id,
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'tecnique' => $request->input('tecnique'),
            'materials' => $request->input('materials'),
            'review' => $request->input('review'),
        ]);
        return redirect('/');
    }
    protected function validacionAjaxObra(CreateObraAjaxRequest $request)
    {
        return array();
    }
}
