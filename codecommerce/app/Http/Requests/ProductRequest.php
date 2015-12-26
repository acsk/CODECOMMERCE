<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;
use CodeCommerce\Product;

class ProductRequest extends Request

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
            'name' => "required|max:30",
            'description' => 'required',//.$products->id.'description',
            'price' => 'required'
        ];
    }
    
    public function messages()
{
    return [
        'name.required' => 'O Título é obrigatório!',
        'name.required' => 'A DESCRIÇÃO é obrigatória',
        'description.required'  => 'A Descrição é obrigatório',
        'price.required' => 'O campo preço é obrigatório'
    ];
}
}