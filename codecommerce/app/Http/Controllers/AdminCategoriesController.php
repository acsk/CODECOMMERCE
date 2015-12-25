<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Validator;

class AdminCategoriesController extends Controller {

   // protected $fillable = array('name', 'description');
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

    public function store(Requests\CategoryRequest $request) {
        $input = $request->all();
        $category = $this->categoryModel->fill($input);
        $category->save();

        return redirect()->route('categories');
    }

    public function edit($id) {

        $category = $this->categoryModel->find($id);
        return view('category.edit', compact('category'));
    }

    public function destroy($id) {

        $this->categoryModel->find($id)->delete();
        return redirect()->route('categories');
    }

    public function update(Requests\CategoryRequest $request, $id) {

        $input = $request->all();
        $this->categoryModel->find($id)->update($input);
        return redirect()->route('categories');
    }

}
