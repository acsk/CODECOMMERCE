<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;

class AdminProductsController extends Controller {

    private $productModel;
   

    public function __construct(Product $productModel) {


        $this->productModel = $productModel;
    }

    public function index() {

        $products = $this->productModel->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(Category $category) {

        $categories = $category->lists('name', 'id');
        return view('products.create', compact('categories'));
    }

    public function store(Requests\ProductRequest $request) {
        $input = $request->all();
        $product = $this->productModel->fill($input);
        $product->save();

        return redirect()->route('products');
    }

    public function show($id) {
        
    }

    public function edit($id, Category $category) {
        $categories = $category->lists('name', 'id');
        $product = $this->productModel->find($id);
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Requests\ProductRequest $request, $id) {

        $input = $request->all();
        $this->productModel->find($id)->update($input);
        return redirect()->route('products');
    }

    public function destroy($id) {

        $this->productModel->find($id)->delete();

        return redirect()->route('products');
    }

    public function images($id, ProductImage $ProductImage) {

        $imagens = $ProductImage->find($id);
        // $product = $this->imageModel->find($id);

        return view('products.images', compact('imagens'));
    }

}
