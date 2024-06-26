<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editProfile extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()

    {
        return [
            'address'    => ['required', 'min:5', 'max:50'],
            'user_name' => ['required', 'min:3', 'max:10', 'unique:users'],
            'email' => ['required', 'email', 'unique:users', 'min:8', 'max:30', 'email:rfc'],
            'phone_number' => ['required', 'min:11', 'max:15']
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Invalid email address',
            'user_name.required' => 'User Name required ',
            'email.required' => 'Email required ',
            'phone_number.required' => 'Phone Number required '

        ];
    }
}
