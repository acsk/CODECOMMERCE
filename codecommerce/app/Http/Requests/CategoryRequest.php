<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;

class CategoryRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        //'email' => 'unique:users,email_address,'.$user->id
        $name = $this->get('id');

        return [
            'name' => "required|min:5|unique:categories, name, $name",
            'description' => 'required'
        ];
    }

}
