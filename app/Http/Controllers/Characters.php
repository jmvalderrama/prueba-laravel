<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Characters extends Controller
{
    //
    function search($id)
    {
        $response = Http::get('https://rickandmortyapi.com/api/character/'.$id.'')->json();
        return view('characters', compact('response'));
    }

    function save(Request $request)
    {
        $data = $request->input();
        print_r($data);
        return Http::post('http://xtremestudio.com.co/API-Prueba/createPrueba', $data)->json();
    }
}
