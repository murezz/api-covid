<?php

namespace App\Http\Controllers;

use App\Charts\CovidChart;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
class CovidController extends Controller
{
    public function chart()
    {
        $suspect = collect(http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $suspectData = $suspect->flatten(1);

        $label = $suspectData->pluck('Provinsi');
        $data  = $suspectData->pluck('Kasus_Posi');
        $colors= $label->map(function($item){
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($label);
        $chart->dataset('Data Kasus Positif di Indonesia', 'pie', $data)->backgroundColor($colors);

        return view('corona', [
            'chart' => $chart,
        ]);
    }
}
