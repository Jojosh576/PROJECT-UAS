<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sendMoney extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'acc_num' =>['required','regex:/[0-9]/'],
            'amount' =>['required','regex:/[0-9]/'],
            'ref' =>['required'],
            'password' =>['required'],
        ];
    }
}
