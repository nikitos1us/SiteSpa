<?php

namespace app\Http\Controllers;

use App\Models\Persons;
use App\Models\Services;
use App\Models\Visitors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function login()
    {
        return view('admin.admin_login')->with('content_type', 'main');
    }

    function check(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'passwd' => 'required'
        ]);

        $admin = Admin::where('name', '=', $request->name)->first();

        if (!$admin) {
            return back()->with('fail', 'No such prefers');
        } else {
            $a = Hash::make($admin->passwd);
            if (Hash::check($request->passwd, $a)) {
                $request->session()->put('LoggedAdmin', $admin->name);
                $request->session()->put('LoggedAdminID', $admin->id);
                return redirect('adminpanel/addvis');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }


    }

    function logout()
    {
        if (session()->has('LoggedAdmin')) {
            session()->pull('LoggedAdmin');
            session()->pull('LoggedAdminID');
            return redirect('/adminpanel');
        }
    }

    function main()
    {
        $data = ['LoggedAdmin' => Admin::where('name', '=', session('LoggedAdmin'))->first()];
        return view('admin.admin_main', $data);
    }

    function settings()
    {
        $data = ['LoggedAdmin' => Admin::where('name', '=', session('LoggedAdmin'))->first()];
        return view('admin.admin_settings', $data);
    }

    function profile()
    {
        $data = ['LoggedAdmin' => Admin::where('name', '=', session('LoggedAdmin'))->first()];
        return view('admin.profile', $data);
    }

    function showvisitors()
    {
        $visitors = Visitors::all();
        return view('admin.admin_addvis', compact('visitors'));
    }

    function showpersons()
    {
        $persons = Persons::all();
        return view('admin.admin_persons', compact('persons'));
    }
    function showservices()
    {
        $service = Services::all();
        return view('admin.admin_services', compact('service'));
    }

    function vischeck(Request $request1)
    {
        $request1->validate([
            'Name' => 'required|max: 80',
            'Email' => 'required|email|max: 255',
        ]);

        $vis = new Visitors();
        $vis->Name = $request1->Name;
        $vis->Email = $request1->Email;

        $email = $request1->Email;

        $visitor = Visitors::where('Email', '=', $request1->Email)->first();


        if (!$visitor) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
                $save = $vis->save();
                if ($save) {
                    return back();
                }
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения поля Email');
            }

        } else {
            return back()->with('fail', 'This visitor is already here');
        }


        return view('admin.admin_addvis', compact('visitors'));

    }


    function perscheck(Request $request1)
    {
        $request1->validate([
            'Name' => 'required|max: 80',
            'Prof' => 'required|max: 255',
        ]);

        $vis = new Persons();
        $vis->Name = $request1->Name;
        $vis->Prof = $request1->Prof;


        $visitor = Visitors::where('Name', '=', $request1->Name)->first();

        if (!$visitor) {

            $save = $vis->save();
            if ($save) {
                return back();
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения поля Email');
            }

        } else {
            return back()->with('fail', 'This visitor is already here');
        }


        return view('admin.admin_persons', compact('persons'));

    }

    function persedit($id)
    {
        $pers = new Persons();
        return view('admin.admin_personsedit', ['data' => $pers->find($id)]);

    }

    function perseditsubmit(Request $request, $id)
    {
        $pers = Persons::find($id);
        $pers->Name = $request->Name;
        $pers->Prof = $request->Prof;

        $pers->save();

        return redirect()->route('adminpanel.persons');

    }

    function persdelete($id)
    {
        Persons::find($id)->delete();
        return redirect()->route('adminpanel.persons');

    }
/*
Lichnyy cabinet
*/
    function lkedit($ad)
    {
        return view('admin.admin_settings', $ad);
    }

    function lkeditsubmit(Request $request, $id)
    {
        $request->validate([
            'passwd1' => 'required',
            'passwd2' => 'required'
        ]);
        $pers = Admin::find($id);


        $admin = Admin::where('id', '=', $id)->first();

        if ($admin) {
            $a = Hash::make($admin->passwd);

            if (Hash::check($request->passwd1, $a)) {

                $pers->passwd = $request->passwd2;
                $pers->save();

                return redirect()->route('adminpanel.settings');
            } else {
                return back()->with('fail', 'Incorrect current password');
            }
        }

    }



    function servcheck(Request $request1)
    {
        $request1->validate([
            'title' => 'required|max: 80',
            'price' => 'required|max: 5',
            'length' => 'required|max: 4'
        ]);

        $serv = new Services();
        $serv->title = $request1->title;
        $serv->price = $request1->price;
        $serv->length = $request1->length;


        $service = Services::where('title', '=', $serv->title)->first();

        if (!$service) {

            $save = $serv->save();
            if ($save) {
                return back();
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения поля Email');
            }

        } else {
            return back()->with('fail', 'This visitor is already here');
        }


        return view('admin.admin_services', compact('service'));

    }

    function servedit($id)
    {
        $serv = new Services();
        return view('admin.admin_servicesedit', ['data' => $serv->find($id)]);

    }

    function serveditsubmit(Request $request, $id)
    {
        $serv = Services::find($id);
        $serv->title = $request->title;
        $serv->price = $request->price;
        $serv->length = $request->length;

        $serv->save();

        return redirect()->route('adminpanel.services');

    }

    function servdelete($id)
    {
        Services::find($id)->delete();
        return redirect()->route('adminpanel.services');

    }

}
