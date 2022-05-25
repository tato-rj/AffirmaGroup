<?php

namespace App\Http\Middleware;

use Closure;

class Honeypot
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
        $live = app()->environment() != 'testing';
        $missingHoneypot = ! $request->has('honeypot');
        $honeypotFilled = ! empty($request->honeypot);
        $submittedTooFast = now()->timestamp - $request->filled_at <= 5;

        if ($live && ($missingHoneypot || $honeypotFilled || $submittedTooFast))
            abort(406, 'Spam detected.');

        return $next($request);
    }
}
