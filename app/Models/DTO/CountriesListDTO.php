<?php

namespace App\Models\DTO;

class CountriesListDTO
{
    public string $countrieName;
    public double $area;
    public string $population;
    public double $population_density;

    public function __construct(string $countrieName, double $area, string $population, double $population_density)
    {
        $this->countrieName = $countrieName;
        $this->area = $area;
        $this->population = $population;
        $this->population_density = $population_density;
    }
}