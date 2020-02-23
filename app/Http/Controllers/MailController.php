<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function notificarMenues(){

        $usuarios=DB::table('users')->get();

        //$menues=DB::table('menus')->get():

        foreach($usuarios as $usu){
            $details = [
                'titulo' => 'Restaurant',
                'cuerpo' => 'Hola '.$usu->nombre.'! Aqui te enviamos los menues del dia de hoy. Saludos'
            ];
           
            \Mail::to($usu->email)->send(new \App\Mail\MailToUsers($details));
        }
        

        return back()->with('notificacion_correcta','Se han notificado correctamente los menues a todos los usuarios');
    }
}
