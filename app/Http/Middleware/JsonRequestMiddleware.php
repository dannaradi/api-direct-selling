<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonRequestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->isJson()){
            return response()->json([
                'status' => 400,
                'message' => 'Parameters must be json'
            ], 400);
        }

        return $next($request);
    }
}
