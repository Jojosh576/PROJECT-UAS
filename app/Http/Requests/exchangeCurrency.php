<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class exchangeCurrency extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ex_from' =>['required'],
            'ex_amount' =>['required','regex:/[0-9]/'],
            'ex_to' =>['required'],
            'date' =>['required'],
           
        ];
    }
}
