<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function perfil()
    {
        $id_user = Auth::user()->id;
        $user = User::find($id_user);

        return view('perfil',compact('user'));
    }

    public function actualizarPerfil(Request $request)
    {
        $nombre_user=$request->input('nombre');
        $apellido_user=$request->input('apellido');
        $direccion_user=$request->input('direccion');
        $telefono_user=$request->input('telefono');
        
        //$email_user=$request->input('email');
        

        $id_user = Auth::user()->id;
        $user = User::find($id_user);

        $user->nombre=$nombre_user;
        $user->apellido=$apellido_user;
        $user->direccion=$direccion_user;
        $user->telefono=$telefono_user;
       
        //$user->email=$email_user;

        $user->save();


        return back()->with('actualizacion_correcta', 'Se actualizo correctamente tu perfil');
    }
}
