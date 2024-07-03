<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth.session.user' => \App\Http\Middleware\AuthenticateSessionUser::class,
            'student' => \App\Http\Middleware\Student::class,
            'reader' => \App\Http\Middleware\Reader::class
        ]);      
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
