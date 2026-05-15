<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarEdad
{
    public function personas(){
        $user = User::all();

        $personas = 0;
        foreach($users as $user){
            if ($user->birthday>10){
                $personas++;
            }
        }
        if($personas>10){
          return('Hay $personas, mayores de 10 años');  
        }
        return $next($request);
    }
}
