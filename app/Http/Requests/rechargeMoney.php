<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rechargeMoney extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'p_num' =>['required'],
            'acc_num' =>['required','regex:/[0-9]/'],
            'type' =>['required'],
            'amount' =>['required','regex:/[0-9]/'],
            'password' =>['required'],
        ];
    }
}
