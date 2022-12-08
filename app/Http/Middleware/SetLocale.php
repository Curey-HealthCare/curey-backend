<?php

namespace App\Http\Middleware;

use Anubixo\LaravelGettext\Facades\LaravelGettext;
use Closure;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     * @throws Exception
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $locale = App::getLocale();
        LaravelGettext::setLocale($locale);
        return $next($request);
    }
}
