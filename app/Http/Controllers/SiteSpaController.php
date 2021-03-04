<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteSpaController extends Controller
{
    public function index( ){
        return view('index', ['test' => '123123']);
    }
}
