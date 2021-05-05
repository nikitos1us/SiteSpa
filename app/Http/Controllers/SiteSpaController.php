<?php

namespace app\Http\Controllers;

use App\Models\Persons;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteSpaController extends Controller
{


    public function index(){
        return view('index')->with('content_type','main');
    }
    public function persons(){
        $persons =Persons::all();
        return view('persons', compact('persons'));
    }
    public function price(){
        $service =Services::all();
        return view('price', compact('service'));
    }
    public function conn(){
        return view('additional.connectDB');
    }


}
