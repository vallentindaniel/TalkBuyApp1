<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // select, insert... about table Products
//use App\Models\Categories;
//use App\Models\Product_reviews;
class ProductController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newProducts = Product::latest()->take(6)->get();
        $randomProducts = Product::inRandomOrder()->take(6)->get();

        return view('product.index',
                    [
                        'newProducts' => $newProducts,
                        'randomProducts' => $randomProducts
                    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id',$id)->get();
        return view('product.show',
                    [
                        'product' => $product
                    ]);
    }


=======
=======
>>>>>>> parent of 24567168 (product controller)
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
>>>>>>> parent of 2456716 (product controller)
}
