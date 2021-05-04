<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function login(){
        return view('admin.admin_login')->with('content_type','main');
    }

    function check(Request $request){
        $request->validate([
            'name'=>'required',
            'passwd'=>'required'
        ]);

        $admin =Admin::where('name','=',$request->name)->first();

        if(!$admin){
            return back()->with('fail','No such prefers');
        }else{
            $a = Hash::make($admin->passwd);
            if(Hash::check($request->passwd,$a)){
                    $request->session()->put('LoggedAdmin',$admin->name);
                    return redirect('adminpanel/admin_main');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }


    }

    function logout(){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/adminpanel');
        }
    }

    function main(){
        $data = ['LoggedAdmin'=>Admin::where('name','=',session('LoggedAdmin'))->first()];
        return view('admin.admin_main',$data);
    }

    function settings(){
        $data = ['LoggedAdmin'=>Admin::where('name','=',session('LoggedAdmin'))->first()];
        return view('admin.settings',$data);
    }

    function profile(){
        $data = ['LoggedAdmin'=>Admin::where('name','=',session('LoggedAdmin'))->first()];
        return view('admin.profile',$data);
    }
}
