<?php

namespace App\GraphQL;

use App\Models\LogCountries;
use App\GraphQL\Queries\LogsCountriesQuery;


class GraphQLSchema
{

    /**
     * Returning an GraphQl Configuration Schema
     *
     * @return array
     */
    public static function schema()
    {
        return [
            'default' => [
                'query' => [
                    'logCountries' => App\GraphQL\Queries\logCountriesQuery::class,
                    'logsCountries' => App\GraphQL\Queries\logsCountriesQuery::class,
                ],
                /*'mutation' => [
                    'updateLogCountries' => UpdateLogCountriesMutation::class,
                    'newLogCountries' => CreateLogCountriesMutation::class,
                    'deleteLogCountries' => DeleteLogCountriesMutation::class
                ],*/
                'types' => [
                    'logCountries' => LogCountriesType::class,
                ],
                'middleware' => [
                    'auth:sanctum',
                ],
                'method' => ['GET', 'POST'],
            ],
            /*'log' => [
                'query' => [
                    'logsCountries' => LogsCountriesQuery::class,
                ],
                'mutation' => [
                    'updateLogCountries' => UpdateLogCountriesMutation::class,
                    'newLogCountries' => CreateLogCountriesMutation::class,
                    'deleteLogCountries' => DeleteLogCountriesMutation::class
                ],
                'types' => [
                    'logsCountries' => LogsCountriesQuery::class,
                ],
                'middleware' => [
                    'auth:sanctum',
                ],
                'method' => ['GET', 'POST'],
            ],*/
        ];
    }
}
