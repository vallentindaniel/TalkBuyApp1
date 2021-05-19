<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
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


}
