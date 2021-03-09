<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteSpaController extends Controller
{


    public function index(){
        return view('index')->with('content_type','main');
    }
    public function persons(){
        return view('persons');
    }
    public function contacts(){
        return view('contacts');
    }
    public function price(){
        return view('price');
    }
}
