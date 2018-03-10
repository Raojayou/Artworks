<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'username' => 'required|string|max:50',
            'password' => 'required|min:6|max:50|confirmed',
            'email' => 'required|string|email|max:50|unique:users',
            'phone' => 'required|string|min:9|max:12',
            'website' => 'required|string|max:50',
            'about' => 'required|string|max:200',
        ],[
            'name.required' => 'Es necesario completar el campo "Nombre".',
            'name.max' => 'Has sobrepasado los 50 caracteres disponibles para el "Nombre".',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',

            'lastName.required' => 'Es necesario completar el campo "Apellido".',
            'lastName.max' => 'Has sobrepasado los 50 caracteres disponibles para el "nombre".',
            'lastName.string' => 'El nombre debe ser una cadena de caracteres.',

            'username.required' => 'Es necesario completar el campo "Nick".',
            'username.max' => 'Has sobrepasado los 50 caracteres disponibles para el "Nick".',
            'username.string' => 'El nombre de usuario debe ser una cadena de caracteres.',

            'email.required' => 'Es necesario completar el campo "E-mail".',
            'email.max' => 'Has sobrepasado los 50 caracteres disponibles para el "E-mail".',
            'email.email' => 'El email debe ser un E-mail válido.',
            'email.unique' => 'El email debe ser un E-mail disponible.',

            'phone.required' => 'Es necesario completar el campo "Móvil".',
            'phone.max' => 'Has sobrepasado los 12 caracteres disponibles para el "Móvil".',
            'phone.numeric' => 'El "Móvil" debe ser un móvil válido.',

            'website.required' => 'La página web es obligatoria.',
            'website.unique' => 'La página web debe ser una página web disponible.',

            'about.required' => 'La descripción es obligatoria.',
            'about.string' => 'La descripción debe ser una cadena de caracteres',
            'about.max' => 'La descripción debe tener 200 caracteres como máximo',

            'password.required' => 'El campo contraseña es obligatorio.',
            'password.string' => 'El campo contraseña debe ser una cadena de caracteres',
            'password.min' => 'El campo contraseña debe tener 6 caracteres como mínimo',
            'password.max' => 'El campo contraseña debe tener 50 caracteres como máximo',
            'password.confirmed' => 'Las contraseñas no coinciden'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'avatar' => 'https://picsum.photos/150/150/?random',
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'phone' => $data['phone'],
            'website' => $data['website'],
            'about' => $data['about'],
        ]);
    }
}
