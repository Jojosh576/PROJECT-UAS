<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class gas extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'b_month'=>['required'],
            'c_code'=>['required','regex:/[0-9]/'],
            'acc_num'=>['required','regex:/[0-9]/'],
            'amount'=>['required','regex:/[0-9]/'],
            'password'=>['required'],
            'type'=>['required'],

        ];
    }
}
