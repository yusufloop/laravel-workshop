<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect('products')->with('success', 'product created successfully');
    }
    public function destroy($id){
        $product =Product::findOrFail($id);
        $product->delete();
        return redirect('products')->with('success', 'Product Deleted successfully');
    }
}
