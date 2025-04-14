<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogCountries extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'username',
        'request_timestamp',
        'num_countries_returned',
        'countries_details',
        'created_date'
    ];

}
