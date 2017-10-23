<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Locale
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
        if ($request->method() === 'GET') {

            $segment = $request->segment(1);

            if (!in_array($segment, config('app.locales'))) {

                $segments = $request->segments();
                $fallback = session('locale') ? session('locale') : config('app.fallback_locale');
                $segments = array_prepend($segments, $fallback);

                return redirect()->to(implode('/', $segments));
            }

            session(['locale' => $segment]);
            App::setLocale($segment);
        }

        return $next($request);
    }
}
