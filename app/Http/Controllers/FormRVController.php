<?php

namespace App\Http\Controllers;

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
        //send the admin an notification
        //$review->notify(new InboxMessage($message));
        // redirect the user back

        return redirect()->back()->with('message', 'Спасибо за обращение! Ваше обращение успешно отправлено!');

    }
}
