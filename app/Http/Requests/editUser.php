<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editUser extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'address'    => ['required', 'min:5', 'max:30'],
            'user_name' => ['required', 'min:3', 'max:50', 'unique:users'],
            'email' => ['required', 'email', 'unique:users', 'min:8', 'max:30', 'email:rfc'],
            'phone_number' => ['required', 'min:11', 'max:15',],
        ];
    }

    public function messages()
    {

        return [
            'username.required' => 'User name Required',
            'phone_number.required' => 'Phone Number Required',
            'phone_number.min' => 'Phone Number Invalid',
            'phone_number.max' => 'Phone Number Invalids',

        ];
    }
}
