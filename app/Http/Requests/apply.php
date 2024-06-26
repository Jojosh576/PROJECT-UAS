<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class apply extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'apply_type' =>['required'],
            'description' =>['required'],
            
            
        ];
    }
}
