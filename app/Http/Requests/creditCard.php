<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class creditCard extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cr_number' =>['required'],
            'acc_num' =>['required','regex:/[0-9]/'],
            'type' =>['required'],
            'amount' =>['required','regex:/[0-9]/'],
            'password' =>['required'],
        ];
    }
}
