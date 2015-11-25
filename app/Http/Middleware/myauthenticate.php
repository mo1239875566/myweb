

<?php
namespace App\Http\Middleware;

use Closure;

class OldMiddleware {

    public function handle($request, Closure $next)
    {
        if ($request->input('age') < 200)
        {
            return redirect('home');
        }

        return $next($request);
    }

}



