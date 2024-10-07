<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $data = Http::get('https://dummyjson.com/users');
        $jsonData = $data->json();
        dump($jsonData);
    }
}
