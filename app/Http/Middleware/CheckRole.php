<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if ($user) {
            if (in_array('Admin', $roles) && ($user->role === 'Users')) {
                return redirect()->to(url()->previous())->with('error', '401 | Unauthorized');
            }
            if (in_array($user->role, $roles) === false && $user->role === 'Admin') {
                return redirect()->to(url()->previous())->with('error', '401 | Unauthorized');
            }
            if (in_array($user->role, $roles)) {
                return $next($request);
            }
        }
    }
}
