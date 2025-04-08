<?php

namespace App\GraphQL\Mutations\LogCountries;

use App\Models\LogCountries;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;

class DeleteLogCountriesMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteLogCountries',
        'description' => 'deletes a log countries'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $logCountries = LogCountries::findOrFail($args['id']);

        return  $logCountries->delete() ? true : false;
    }
}