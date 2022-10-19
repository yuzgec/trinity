<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemsilciRequest extends FormRequest
{
    public function rules()
    {
        return [

            "kurum"                     => 'required|not_in:0',
            "nasilhaber"                => 'required',
            "resmiad"                   => 'required',
            "okuladres"                 => 'required',
            "il"                        => 'required',
            "kurumtelefon"              => 'required',
            "adsoyad"                   => 'required',
            "gorev"                     => 'required',
            "email"                     => 'required|email|unique:temsilci,email,'.$this->id,
            "telefon"                   => 'required|unique:temsilci,email,'.$this->id,
        ];
    }
    public function messages()
    {
        return [
            'kurum.required'            => 'Bu alan zorunludur.',
            'kurum.not_in'              => 'Bu alan zorunludur.',
            'nasilhaber.required'       => 'Bu alan zorunludur.',
            'resmiad.required'          => 'Kurum Adı alanı zorunludur.',
            'okuladres.required'        => 'Adres alanı zorunludur.',
            'il.required'               => 'İl alanı zorunludur.',
            'kurumtelefon.required'     => 'Kurum telefon alanı zorunludur.',
            'adsoyad.required'          => 'Adı Soyadı alanı zorunludur.',
            'gorev.required'            => 'Görev alanı zorunludur.',
            'email.required'            => 'Email alanı zorunludur.',
            'email.unique'              => 'Email adresi daha önce girilmiş.',
            'email.email'               => 'Geçerli bir email adresi yazınız.',
            'telefon.required'          => 'Telefon alanı zorunludur.',
            'telefon.unique'            => 'Telefon Numarası daha önce girilmiş.',
        ];
    }
}
