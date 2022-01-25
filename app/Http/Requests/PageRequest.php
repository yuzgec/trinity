<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'                 => 'required|min:6|max:99|unique:page,title,'.$this->id,
            'category'              => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Sayfa başlığını giriniz',
            'title.max'                 => 'Sayfa başlığı en fazla 99 karakter olabilir',
            'title.min'                 => 'Sayfa başlığı en fazla 6 karakter olabilir',
            'title.unique'              => 'Sayfa başlığı daha önce eklenmiş',
            'category.required'         => 'Sayfa Kategori seçimi zorunludur.'
        ];
    }
}
