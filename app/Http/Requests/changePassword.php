<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changePassword extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'current_password' => ['required'],
            'new_password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'confirm_password' => ['required', 'same:new_password']
        ];
    }

    public function messages()
    {
        return [
            'current_password.same' => 'Current Password Must be match',
            'new_password.required' => 'New Password required',
            'confirm_password.required' => 'Confirm Password required',
            'confirm_password.same' => 'Confirm Password must match with new password'

        ];
    }
}
