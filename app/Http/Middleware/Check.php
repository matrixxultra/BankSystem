<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //dd(auth()->guard("client")->attempt($request->all("email","password")));
       // dd($request->all("email","password"));
        if ( auth()->guard("client")->attempt($request->all("email","password")) ) {

            return redirect()->intended("/virements");
        }
        elseif (auth()->guard("employer")->attempt($request->all("email","password")) ) {
            return redirect()->route("clients.index");
        }
        else {
            return redirect()->back()->with("failed","Email Ou Mot de Pas Et Incorrect");
        }

    }
}
