<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request;

class TrustProxies extends Middleware
{
    protected $proxies;

    protected function proxies(): array
    {
        return $this->proxies ?? [];
    }

    protected function headers(): int
    {
        return Request::HEADER_X_FORWARDED_FOR | 
               Request::HEADER_X_FORWARDED_HOST | 
               Request::HEADER_X_FORWARDED_PORT | 
               Request::HEADER_X_FORWARDED_PROTO;
    }
}
