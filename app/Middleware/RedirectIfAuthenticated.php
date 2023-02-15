<?php
/**
 * Volcano - RedirectIfAuthenticated
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

namespace App\Middleware;

use Volcano\Http\Request;
use Volcano\Support\Facades\Auth;
use Volcano\Support\Facades\Config;
use Volcano\Support\Facades\Redirect;
use Volcano\Support\Facades\Response;

use Closure;


class RedirectIfAuthenticated
{
    /**
     * Traiter une demande entrante.
     *
     * @param  \Volcano\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (is_null($guard)) {
            $guard = Config::get('auth.defaults.guard', 'web');
        }

        if (Auth::guard($guard)->guest()) {
            return $next($request);
        }

        // L'Utilisateur est authentifié.
        else if ($request->ajax() || $request->wantsJson() || $request->is('api/*')) {
            return Response::make('Unauthorized Access', 401);
        }

        $uri = Config::get("auth.guards.{$guard}.paths.dashboard", 'admin/dashboard');

        return Redirect::to($uri);
    }
}
