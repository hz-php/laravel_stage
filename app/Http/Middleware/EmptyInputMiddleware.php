<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmptyInputMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (empty($request->input('email'))) {
            $em = 'email';
        }
        if (empty($request->input('names'))) {
            $em = 'names';
        }
        if (empty($request->input('names')) & empty($request->input('email'))) {
            $em = 'оба поля';
        }
        if (empty($request->input('names')) || empty($request->input('email'))) {
            $state = 'Не заполнено' . " " . $em;
            return response()->view('welcome', ['name' => $state]);
        } else {
            return $next($request);
        }

    }
}
