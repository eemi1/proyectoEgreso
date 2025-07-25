<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//CRUD de Laravel usando Eloquent ORM.
use App\Models\User;
//Encriptación de Laravel
use Illuminate\Support\Facades\Hash;
// Autenticación de usuarios (Loggeo automático, verificación de usuario,etc) de Laravel
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //---------------------------------------
    public function show()
    {
        return view('auth.register');
    }

    //---------------------------------------
    

    public function register(Request $request)
    {
        // Validación
        $request->validate([
            'new-name' => 'required|string|max:255',
            'new-email' => 'required|string|email|max:255|unique:users,email',
            'new-password' => 'required|string|min:6|confirmed',
            'new-phone' => 'nullable|string|max:20',
        ]);

        // Crear usuario
        $user = User::create([
            'name' => $request->input('new-name'), // El valor del input con name="name"
            'email' => $request->input('new-email'), // El valor del input con name="email"
            'password' => Hash::make($request->input('new-password')),
            'phone' => $request->input('new-phone'),  // El valor del input con name="phone"
        ]);

        // Login automático
        Auth::login($user);

        // Redireccionar
        return redirect('/')->with('success', '¡Registro exitoso!');
    }


}
