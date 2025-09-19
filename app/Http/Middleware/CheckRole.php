<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $userRole = (int)$user->role_id; // Cast to integer
        $allowedRoles = array_map('intval', $roles);

        // Debug logging (remove in production)
        Log::info('CheckRole Debug', [
            'user_id' => $user->id,
            'user_role_id' => $userRole,
            'allowed_roles' => $allowedRoles,
            'route_name' => $request->route()->getName(),
            'url' => $request->url()
        ]);

        // Check if user role is in allowed roles
        if (!in_array($userRole, $allowedRoles)) {
            Log::warning('CheckRole: Access denied', [
                'user_id' => $user->id,
                'user_role_id' => $userRole,
                'allowed_roles' => $allowedRoles,
            ]);

            // Return 403 error instead of redirecting to prevent loops
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Access denied. Insufficient permissions.'
                ], 403);
            }

            // For web requests, show 403 page or redirect to appropriate dashboard
            abort(403, 'Access denied. You don\'t have permission to access this page.');
        }

        return $next($request);
    }
}