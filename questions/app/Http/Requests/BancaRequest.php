<?php

namespace Questions\Http\Requests;

use Questions\Http\Requests\Request;

class BancaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
        
      $id = $this->route('id');
               
//        return ['descricao' => "required"];
        return ['descricao' => "required|unique:bancas,descricao,$id"];
           
        
    }
}
