<?php

namespace App\GraphQL\Queries;

use App\Models\LogCountries;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class LogsCountriesQuery extends Query
{
    protected $attributes = [
        'name' => 'logCountries',
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('LogCountries'));
    }

    public function resolve($root, $args)
    {
        return LogCountries::all();
    }
}