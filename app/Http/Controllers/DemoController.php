<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index()
    {
        $url = route('demo',["id" => 5]);
        return $url;
    }
}
