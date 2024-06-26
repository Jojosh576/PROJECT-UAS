<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginForm extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_name' => ['required'],
            'password' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'uname.required' => 'User Name required',
            'password.required' => 'Password required',

        ];
    }
}
