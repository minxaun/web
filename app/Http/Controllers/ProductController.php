<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index(){
        $product = Product::paginate();

        return view('index',compact('product'));
    }

    public function productData(){

        $Product = Product::paginate();

        return json_encode($Product);
    }

    public function searchProduct(Request $request){

        $Product = Product::get;

        return json_encode($Product);
    }
}
