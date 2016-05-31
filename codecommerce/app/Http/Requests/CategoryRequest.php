<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;

class CategoryRequest extends Request {

    
    public function authorize() {
        return true;
    }

   
    public function rules() {
        $id = $this->route('id');

        return [
            'name' => "unique:categories,name,$id",
            'description' => 'required'
        ];
    }

}
