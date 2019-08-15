<?php

namespace App\Http\Middleware;

use App\Services\IpDenyAccessServices;
use Closure;

class CheckIp
{
    private $ipDenyAccessServices;
    public function __construct(IpDenyAccessServices $ipDenyAccessServices)
    {
        $this->ipDenyAccessServices = $ipDenyAccessServices;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->ipDenyAccessServices->accessCheck($request);
        return $next($request);
    }
}
