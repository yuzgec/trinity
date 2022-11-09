<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasvuruRequest extends FormRequest
{
    public function rules()
    {
        return [
            "name"                      => 'required',
            "email"                     => 'required|email',
            "phone"                     => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'             => 'İsim alan zorunludur.',
            'email.required'            => 'Email alanı zorunludur.',
            'email.email'               => 'Geçerli bir email adresi yazınız.',
            'telefon.required'          => 'Telefon alanı zorunludur.',
        ];
    }
}
