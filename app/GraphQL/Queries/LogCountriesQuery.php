<?php

namespace App\GraphQL\Queries;

use App\Models\LogCountries;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class LogCountriesQuery extends Query
{
    protected $attributes = [
        'name' => 'logCountries',
    ];

    public function type()
    {
        return GraphQL::type('LogCountries');
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return LogCountries::findOrFail($args['id']);
    }
}