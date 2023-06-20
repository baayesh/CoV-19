<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\covid_19_detail;
use Illuminate\Support\Facades\Http;



class DataController extends Controller
{
   
    public function read()
    {
        $latestValue = covid_19_detail::max('created_at');
        $data = covid_19_detail::where('created_at', $latestValue) -> first();

        return view ('home', ['detail' => $data]);
    }
   
    public function store()
   {
 
    $api_url = 'https://hpb.health.gov.lk/api/get-current-statistical';
    $res = Http::timeout(200000)->get($api_url);
    $data = json_decode($res -> body());
    $dataArray = (array)$data->data;

    $covid_19_detail = new covid_19_detail;

    $covid_19_detail -> local_new_cases = $dataArray['local_new_cases'];
    $covid_19_detail -> local_total_cases = $dataArray['local_total_cases'];
    $covid_19_detail -> number_of_individuals_in_hospitals = $dataArray['local_total_number_of_individuals_in_hospitals'];
    $covid_19_detail -> local_deaths = $dataArray['local_deaths'];
    $covid_19_detail -> local_new_deaths = $dataArray['local_new_deaths'];
    $covid_19_detail -> local_recovered = $dataArray['local_recovered'];
    $covid_19_detail -> local_active_cases= $dataArray['local_active_cases'];
    $covid_19_detail -> global_new_cases = $dataArray['global_new_cases'];
    $covid_19_detail -> global_total_cases = $dataArray['global_total_cases'];
    $covid_19_detail -> global_deaths = $dataArray['global_deaths'];
    $covid_19_detail -> global_new_deaths = $dataArray['global_new_deaths'];
    $covid_19_detail -> global_recovered = $dataArray['global_recovered'];
    $covid_19_detail -> total_pcr_testing_count = $dataArray['total_pcr_testing_count'];

    $covid_19_detail->save();

    return redirect() ->route('delete');

   }

   public function destroy()
   {
    $oldestValue = covid_19_detail::min('created_at');
    $data = covid_19_detail::where('created_at', $oldestValue) -> first();
    if($data) {
        $data ->where('created_at', $oldestValue) -> delete();
    }

    return redirect() -> route('read');

   }
}
    