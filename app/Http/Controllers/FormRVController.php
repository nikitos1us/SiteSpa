<?php

namespace App\Http\Controllers;

use App\Models\Visitors;
use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormRVRequest;
use App\Models\Review;

class FormRVController extends Controller
{
    public function show()
    {
        return view('contacts');
    }

    public function sendRequest(FormRVRequest $message, Review $review)
    {
    }

    function revcheck(Request $request)
    {

        $request->validate([
            'name' => 'required|max: 80',
            'email' => 'required|email|max: 255',
            'comment' => 'required|min: 10'
        ]);

        $rev = new Review();
        $rev->name = $request->name;
        $rev->email = $request->email;
        $rev->comment = $request->comment;

        $visitor = Visitors::where('Email', '=', $request->email)->first();

        if (!$visitor) {
            return back()->with('fail', 'No such visitor');
        } else {
            $save = $rev->save();

            if ($save) {
                return back();
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения полей');
            }
        }


    }
}
