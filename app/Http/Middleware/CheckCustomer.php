<?php

namespace App\Http\Middleware;

use Closure;

use App\Customer;

class CheckCustomer
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
        if(Customer::where('session_id', $request->session()->getId())->first()){
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}
