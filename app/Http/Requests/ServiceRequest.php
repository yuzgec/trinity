<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'                 => 'required|min:6|max:99|unique:service,title,'.$this->id,
            'category'              => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Hizmet başlığını giriniz',
            'title.max'                 => 'Hizmet başlığı en fazla 99 karakter olabilir',
            'title.min'                 => 'Hizmet başlığı en fazla 6 karakter olabilir',
            'title.unique'              => 'Hizmet başlığı daha önce eklenmiş',
            'category.required'         => 'Hizmet Kategori seçimi zorunludur.'
        ];
    }
}
