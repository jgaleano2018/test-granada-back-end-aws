<?php

namespace App\Http\Controllers;
use App\Models\LogCountries;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LogCountriesController extends Controller
{
    public function index(){
        $logCountries = LogCountries::all();
        return response()->json($products);
    }

    public function show($id){
        $logCountries = LogCountries::find($id);
        return response()->json($product);
    }

    public function create(Request $request){
     
        $logCountries = new LogCountries();

        //Se consume el endpoint: https://restcountries.com/v3.1/all

        $uri_rest_countries = 'https://restcountries.com/v3.1/all';

        $countries_data = Http::get($uri_rest_countries)->json();
        $countries = [];
        $num_countries_consult = $request->num_countries_consult;
        $population_density = 0;
        $counter_countries = 0;
        $countries_details = [];
        $countries_details_end = [];

        foreach($countries_data as $data) {

            $countries = [];
            $countries->add(new \App\Models\Dto\CountriesDTO($data));

            if ($counter_countries < $num_countries_consult) {
                $countries_details = [];
                $counter_countries = $counter_countries + 1;
                $population_density = $countries->area / $countries->population;
                $logCountries->username     = $countries->username;
                $countries_name = [];
                $countries_name = $countries->name;                
                $countries_details->countrieName = $countries_name->official;
                $countries_details->area = $countries->area;
                $countries_details->population = $countries->population;
                $countries_details->population_density = $population_density;                                
                        
                $countries_details_end->add(new \App\Models\Dto\CountriesListDTO($countries_details));
            }
        }

        $logCountries->username     = $countries->username;
        $logCountries->request_timestamp    = Carbon::now()->timestamp;
        $logCountries->num_countries_returned = $counter_countries;
        //Convert array to json form...
        $countries_details_out = json_encode($countries_details_end);
        $logCountries->countries_details = $countries_details_out;
        $logCountries->created_date = Carbon\Carbon::now();
                
        $logCountries->save();

        return response()->json("Log Countries Successfully Created!");

    }


    public function update(Request $request, $id){

        $logCountries = LogCountries::find($id);

        $logCountries->username     = $request->username;
        $logCountries->request_timestamp    = $request->request_timestamp;
        $logCountries->num_countries_returned = $request->num_countries_returned;
        $logCountries->countries_details = $request->countries_details;

        $logCountries->save();

        return response()->json($logCountries);
    }

    public function delete($id){
        $logCountries = LogCountries::find($id);
        $logCountries->delete();

        return response()->json('Log Countries sucessfully deleted!');
    }
    
}