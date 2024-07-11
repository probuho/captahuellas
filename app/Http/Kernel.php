<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        // otros middleware...
        'approved' => \App\Http\Middleware\EnsureUserIsApproved::class,
    ];
}
