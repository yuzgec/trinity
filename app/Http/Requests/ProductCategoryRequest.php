<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'                 => 'required|min:6|max:99|unique:product_categories,title,'.$this->id,
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Ürün Kategori başlığını giriniz',
            'title.max'                 => 'Ürün Kategori başlığı en fazla 99 karakter olabilir',
            'title.min'                 => 'Ürün Kategori başlığı en fazla 6 karakter olabilir',
            'title.unique'              => 'Ürün Kategori başlığı daha önce eklenmiş',
        ];
    }
}
