<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;


class AdminProductsController extends Controller {

    private $productModel;

    public function __construct(Product $productModel) {

        $this->productModel = $productModel;
    }

    public function index() {
        $products = $this->productModel->all();
        return view('products.index', compact('products'));
    }

   
    public function create() {
        
    }

    
    public function store(Request $request) {
       
    }

  
    public function show($id) {
       
    }

   
    public function edit($id) {
      
    }

    public function update(Request $request, $id) {
       
    }
    public function destroy($id) {
      
    }

}
