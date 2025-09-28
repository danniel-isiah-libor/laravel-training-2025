<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // User is authenticated
                // Only redirect if not already on dashboard or protected route
                if (!$request->routeIs('dashboard') && !$this->isProtectedRoute($request)) {
                    return redirect()->route('dashboard');
                }
                return $next($request);
            }
        }

        // User is not authenticated
        // Only redirect if not already on login or public route
        if (!$request->routeIs('signin') && !$this->isPublicRoute($request)) {
            return redirect()->route('signin');
        }

        return $next($request);
    }

    /**
     * Check if the current route is a protected route
     */
    protected function isProtectedRoute(Request $request): bool
    {
        $protectedRoutes = ['dashboard', 'profile', 'settings']; // Add your protected route names
        return $request->routeIs($protectedRoutes);
    }

    /**
     * Check if the current route is a public route
     */
    protected function isPublicRoute(Request $request): bool
    {
        $publicRoutes = ['signin', 'register', 'password.request', 'home']; // Add your public route names
        return $request->routeIs($publicRoutes);
    }
}
