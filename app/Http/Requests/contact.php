<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contact extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'user_name' =>['required'],
            'r_type' =>['required'],
            'description' =>['required'],
            

        ];
    }
}
