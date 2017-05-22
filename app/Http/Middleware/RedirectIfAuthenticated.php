<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            $user = Auth::user();
            if ($user->hasRole('Admin')) {
                return redirect('/admin/users');
            } elseif($user->hasRole('User')) {
                //@todo validar si el usuario esta activo o no
                switch ($user->usuario_aprobado) {
                    case 'activo':
                    case 'aprobado':
                        return redirect('/dashboard');
                        break;
                    case 'curso':
                        return redirect('/curso');
                        break;
                    case 'cuestionario':
                        return redirect('/evaluacion');
                        break;
                    default:
                        return redirect('/evaluacion');
                        break;
                }
            }
        }

        return $next($request);
    }

}
