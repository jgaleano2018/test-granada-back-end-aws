<?php

namespace App\Models\DTO;

class CountriesDTO
{
    public string $name;
    public array $tld;
    public string $cca2;
    public int $ccn3;
    public string $cca3;
    public bool $independent;
    public string $status;
    public bool $unMember;
    public array $currencies;
    public array $iid;
    public array $capital;
    public array $altSpellings;
    public string $region;
    public array $languages;
    public array $traslations;
    public array $latlng;
    public bool $landlocked;
    public double $area;
    public array $demonyms;
    public string $flag;
    public array $maps;
    public int $population;
    public array $car;
    public array $timezones;
    public array $continents;
    public array $flags;
    public array $coatOfArms;
    public string $startOfWeek;
    public array $capitalInfo;


    public function __construct(string $name, array $tld, string $cca2, int $ccn3, bool $independent, string $status, bool $unMember, array $currencies, array $iid, array $capital, array $altSpellings, string $region, array $languages, array $traslations, array $latlng, bool $landlocked, double $area, array $demonyms, string $flag, array $maps, int $population, array $car, array $timezones, array $continents, array $flags, array $coatOfArms, string $startOfWeek, array $capitalInfo)
    {
        $this->name = $name;
        $this->tld = $tld;
        $this->cca2 = $cca2;
        $this->ccn3 = $ccn3;
        $this->cca3 = $cca3;
        $this->independent = $independent;
        $this->status = $status;
        $this->unMember = $unMember;
        $this->currencies = $currencies;
        $this->iid = $iid;
        $this->capital = $capital;
        $this->altSpellings = $altSpellings;
        $this->region = $region;
        $this->languages = $languages;
        $this->traslations = $traslations;
        $this->latlng = $latlng;
        $this->landlocked = $landlocked;
        $this->area = $area;
        $this->demonyms = $demonyms;
        $this->flag = $flag;
        $this->maps = $maps;
        $this->population = $population;
        $this->car = $car;
        $this->timezones = $timezones;
        $this->continents = $continents;
        $this->flags = $flags;
        $this->coatOfArms = $coatOfArms;
        $this->startOfWeek = $startOfWeek;
        $this->capitalInfo = $capitalInfo;

    }
}