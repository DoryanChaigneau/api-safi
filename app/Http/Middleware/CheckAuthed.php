<?php

namespace App\Http\Middleware;

use App\Utils;
use Closure;

class CheckAuthed
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
        $employee = Utils::isValidConnection($request);
        if ($employee != false) {
            $request->employee = $employee;
            return $next($request);
        } else {
            return response()->json(["code" => 403, "message" => "Vous n'êtes pas autorisé à effectuer cette action"])->setStatusCode(403);
        }
    }
}
