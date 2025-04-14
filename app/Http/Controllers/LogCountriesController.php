<?php

namespace App\Http\Controllers;

use App\Models\LogCountries;
use Illuminate\Http\Request;
//use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LogCountriesController extends Controller
{
    //
    public function index(){
        echo "Prueba controller okkk";
        $logCountries = LogCountries::all();
        return response()->json($logCountries);
    }

    public function show($id){
        $logCountries = LogCountries::find($id);
        return response()->json($product);
    }

    public function create(Request $request){
     
        //Se consume el endpoint: https://restcountries.com/v3.1/all

        $uri_rest_countries = 'https://restcountries.com/v3.1/all';

        $countries_data = Http::get($uri_rest_countries)->json();
        $countries = [];
               
        $countries_data_itemf = $countries_data[0];
        $num_countries_consult = $request->numberCountriesReturned;
        $population_density = 0;    
        $counter_countries = 0;    
        $countries_details = [];
        $countries_details_end = [];
        $array_countries = [];
        $logCountries = new LogCountries();

        foreach ($countries_data as $i => $singleCountry)
        {
            $countries = [];
            $logCountries = new LogCountries();

            if ($counter_countries < $num_countries_consult) {

                $countries_details = [];
                $counter_countries = $counter_countries + 1;
                $population_density = $singleCountry['area'] / $singleCountry['population'];
                $logCountries->username = $request->username;                
                $logCountries->request_timestamp = now();
                $logCountries->num_countries_returned = $num_countries_consult;
                //Convert array to json form...
                $countries_details_out = json_encode($singleCountry);
                $logCountries->countries_details = $countries_details_out;
                $logCountries->created_date = now();

                $array_countries_single = array();
                $array_countries_single['username'] = $logCountries->username;
                $array_countries_single['request_timestamp'] = $logCountries->request_timestamp;
                $array_countries_single['num_countries_returned'] = $logCountries->num_countries_returned;
                $array_countries_single['countries_details'] = $logCountries->countries_details;
                $array_countries_single['created_date'] = $logCountries->created_date;

                array_push($array_countries, $array_countries_single);

                $logCountries->save();
            }         
        }

        return response()->json($array_countries);

    }

    public function update(Request $request){

        $id = $request->id;
        $logCountries = LogCountries::find($id);

        $logCountries->username = $request->username;
        $logCountries->request_timestamp = now();
        $logCountries->num_countries_returned = $request->num_countries_returned;
        $logCountries->countries_details = $request->countries_details;

        $logCountries->save();

        return response()->json($logCountries);
    }

    public function delete(Request $request){
        $id = $request->id;

        $logCountries = LogCountries::find($id);
        $logCountries->delete();

        return response()->json('Log Countries sucessfully deleted!');
    }
    

}
