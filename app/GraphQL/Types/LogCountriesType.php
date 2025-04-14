<?php

//declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\LogCountries;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;

class LogCountriesType extends GraphQLType
{
    protected $attributes = [
        'name' => 'LogCountries',
        'description' => 'Details about a log countries',
        'model' => LogCountries::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the log countries',
            ],
            'username' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'request_timestamp' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Timestamp',
            ],
            'num_countries_returned' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Number of countries consulted',
            ],
            'countries_details' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The grape variety of the wine',
            ],
            'created_date' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The created date of log countries',
            ],
        ];
    }
}


