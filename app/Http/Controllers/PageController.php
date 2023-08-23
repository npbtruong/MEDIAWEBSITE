<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //
    function pageRouteAndCallApi()
    {
        $response = Http::get('http://ddragon.leagueoflegends.com/cdn/13.15.1/data/en_US/champion/Lux.json');//API response

        if ($response->successful()) {
            $data = $response->json(); // Convert response to JSON

            // Process the $data here and route to page view
            return view('welcome', ['apiData' => $data['data']['Lux']['skins']]);

        } else {
            $statusCode = $response->status();
            // Handle error
        }
        //return view('welcome');
    }

    //Hàm đổi ngôn ngữ
    function langChange($langcode){

        App::setLocale($langcode);
        session()->put("lang_code", $langcode);
        return redirect()->back();
    }


    //Movie Page
    function movieAndCallApi()
    {
        $response = Http::get('https://ophim1.com/danh-sach/phim-moi-cap-nhat?');//API response

        if ($response->successful()) {
            $data = $response->json(); // Convert response to JSON

            // Process the $data here and route to page view
            return view('movie', ['apiData' => $data['items']]);

        } else {
            $statusCode = $response->status();
            // Handle error
        }
        //return view('welcome');
    }
    //xem phim cụ thể
    function watchAndCallApi($slug){

        $response = Http::get('https://ophim1.com/phim/' . $slug);//API response

        if ($response->successful()) {
            $data = $response->json(); // Convert response to JSON

            // Process the $data here and route to page view
            return view('watch', [
                'apiData' => $data['episodes'],
                'apiData2' => $data['movie']
            ]);

        } else {
            $statusCode = $response->status();
            // Handle error
        }

        //return view('watch')->with('slug', $slug);
    }
}
