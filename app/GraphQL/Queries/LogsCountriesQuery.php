<?php

namespace App\GraphQL\Queries;

use Closure;
use App\Models\LogCountries;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class LogsCountriesQuery extends Query
{
    protected $attributes = [
        'name' => 'logCountries',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('LogCountries'));
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return LogCountries::all();
    }

}