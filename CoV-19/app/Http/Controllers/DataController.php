<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\covid_19_detail;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;



class DataController extends Controller
{
    //get values from database 
    public function read()
    {
       try{
            $latestValue = covid_19_detail::max('id');
            $data = covid_19_detail::where('id', $latestValue) -> first();
            
            if(!$data){
                return redirect()->route('FirstData');
            }
                    
            return view ('home', ['detail' => $data]);
            
        }
     catch(Exception){
        abort(404);
     }


    }
   
    public function store()
   {
    //Fetch data from api
    try{
        $api_url = 'https://hpb.health.gov.lk/api/get-current-statistical';
        $res = Http::timeout(200000)->get($api_url);
        $data = json_decode($res -> body());
        $dataArray = (array)$data->data;
    }
    catch(\Exception){
        return redirect() ->route('home');
    }

  
    //Insert data to the database comes form api
    $covid19Data = [
        'local_new_cases' => $dataArray['local_new_cases'],
        'local_total_cases' => $dataArray['local_total_cases'],
        'number_of_individuals_in_hospitals' => $dataArray['local_total_number_of_individuals_in_hospitals'],
        'local_deaths' => $dataArray['local_deaths'],
        'local_new_deaths' => $dataArray['local_new_deaths'],
        'local_recovered' => $dataArray['local_recovered'],
        'local_active_cases'=> $dataArray['local_active_cases'],
        'global_new_cases' => $dataArray['global_new_cases'],
        'global_total_cases' => $dataArray['global_total_cases'],
        'global_deaths' => $dataArray['global_deaths'],
        'global_new_deaths' => $dataArray['global_new_deaths'],
        'global_recovered' => $dataArray['global_recovered'],
        'total_pcr_testing_count' => $dataArray['total_pcr_testing_count']

    ];

    //To keep only 5 data
    covid_19_detail::insert($covid19Data);

    $count = DB::table('covid_19_details')->count();
    if($count<5)
    {
      return redirect() -> route('home');
    }
    else
    {
       return redirect() ->route('delete');
    }
    
    

   }

   //Delete Old Data
   public function destroy()
   {
    $oldestValue = covid_19_detail::min('id');
    $data = covid_19_detail::where('id', $oldestValue) -> first();
    if($data) {
        $data ->where('id', $oldestValue) -> delete();
    }

    return redirect() -> route('home');

   }

   public function firstData()
   {
    return view('firstData');
   }
}
    