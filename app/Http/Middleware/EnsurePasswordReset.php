<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePasswordReset
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (! $user || ! $user->must_reset_password || $request->session()->has('impersonator_id')) {
            return $next($request);
        }

        if ($request->routeIs('security.edit', 'logout')) {
            return $next($request);
        }

        return redirect()->route('security.edit');
    }
}
