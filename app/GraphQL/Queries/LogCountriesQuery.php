<?php

namespace App\GraphQL\Queries;

use Closure;
use App\Models\LogCountries;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class LogCountriesQuery extends Query
{
    protected $attributes = [
        'name' => 'logCountries',
    ];

    public function type(): Type
    {
        return GraphQL::type('LogCountries');
    }

    public function args(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
            ],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return $logCountries = LogCountries::find($args['id']);
    }
}