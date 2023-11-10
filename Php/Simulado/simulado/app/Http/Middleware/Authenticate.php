<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }


    public function handle($request, Closure|\Closure $next, ...$guards)
    {
        $response = $next($request);

        if (!auth()->check() && !$request->hasHeader('Authorization')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        if (!$this->authenticate($request, $guards)) {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        return $response;
    }

}
