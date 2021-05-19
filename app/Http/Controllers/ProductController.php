<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // select, insert... about table Products
//use App\Models\Categories;
//use App\Models\Product_reviews;
class ProductController extends Controller
{
    public function index() {
        $products =  Product::all();
      //  $categories = Categories::all();
       // $categories2 = Categories::select()->inRandomOrder()->limit(10)->get();
        return view('product/index',
             [
                'products'=> $products
             ]
        );
    }
}
