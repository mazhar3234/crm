<?php
/**
 * Middleware : Admin
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 27 January, 2020
 */
namespace App\Http\Middleware;

use Closure;
use Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if ( !Session::has('admin.id') ) {
            toastr()->warning('You are not an authorized user!');

            return redirect('/admin');
        }

        return $next($request);
    }
}
