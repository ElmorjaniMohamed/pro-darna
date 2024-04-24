<?php


namespace App\Http\Middleware;

use Closure;
use App\Models\Agency;

class CheckAgency
{
    public function handle($request, Closure $next)
    {
        if (Agency::where('user_id', auth()->user()->id)->exists()) {
            return redirect()->route('agencies.index')->withErrors('error', 'You have already created an agency.');
        }

        return $next($request);
    }

}