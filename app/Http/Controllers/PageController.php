<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(Request $request){

        // dd($request->all());
        $products = Product::where('inStock', true)->latest()->get();
        return view('dashboard', ['products' => $products]);
    }
}
