<?php

namespace App\GraphQL\Mutations\LogCountries;

use App\Models\LogCountries;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateLogCountriesMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateLogCountries',
        'description' => 'Updates a log countries'
    ];

    public function type(): Type
    {
        return GraphQL::type('LogCountries');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'username' => [
                'name' => 'username',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'request_timestamp' => [
                'name' => 'request_timestamp',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'num_countries_returned' => [
                'name' => 'num_countries_returned',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'countries_details' => [
                'name' => 'countries_details',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $logCountries = LogCountries::findOrFail($args['id']);
        $logCountries->fill($args);
        $logCountries->save();

        return $logCountries;
    }
}