<?php

namespace App\Http\Middleware;

use Closure;

class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $actually_user=\Auth::user();
        if($actually_user->type_user!=2){
            return view("mensajes.msj_rechazado")->with("msj","No tiene los privilegios para esta seccion");
        }
        return $next($request);
    }
}
