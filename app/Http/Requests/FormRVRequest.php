<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRVRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max: 80',
            'email' => 'required|email|max: 255',
            'comment' => 'required',
        ];
    }
}
