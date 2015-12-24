<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Validator;

class CategoryController extends Controller {

    protected $fillable = array('name', 'description');
    private $categoryModel;

    public function __construct(Category $categoryModel) {

        $this->categoryModel = $categoryModel;
    }

    public function index() {
        $categories = $this->categoryModel->all();
        return view('category.index', compact('categories'));
    }
    public function create() {
       
        return view('category.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('categorias.create')
                            ->withErrors($validator)
                            ->withInput();
        }


        $category = $this->categoryModel->fill($input);
        $category->save();

        return redirect()->route('categorias');
    }

    public function edit($id) {

        $category = $this->categoryModel->find($id);
        return view('category.edit', compact('category'));
    }

    public function destroy($id) {

        $this->categoryModel->find($id)->delete();
        return redirect()->route('categorias');
    }
    public function update(Request $request, $id) {

        $this->categoryModel->find($id)->update($request->all());
        return redirect()->route('categorias');
    }

}
