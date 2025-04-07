<?php

namespace App\Models\DTO;

class CountriesNameDTO
{
    public string $common;
    public string $official;

    public function __construct(string $common, string $official)
    {
        $this->common = $common;
        $this->official = $official;
    }
}