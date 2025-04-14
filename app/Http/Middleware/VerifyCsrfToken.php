<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'http://localhost:8000/logCountries', 'http://localhost:8000/logCountriesEdit', 'http://localhost:8000/logCountriesDelete', 'http://localhost:8000/graphiql'
    ];
}
