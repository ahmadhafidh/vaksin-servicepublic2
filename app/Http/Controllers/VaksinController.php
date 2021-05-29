<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VaksinController extends Controller
{
    public function index(){
        $vaksins = Http::get("https://vaksincovid19-api.vercel.app/api/vaksin");

        $array = json_decode(($vaksins), true);
        // dd($array);
        // echo "<pre>";
        // print_r($array['totalsasaran']);
        // echo "</pre>";

        // exit;

        return view("vaksins",[
            "array" => $array
        ]);
    }
}