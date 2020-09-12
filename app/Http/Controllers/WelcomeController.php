<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class WelcomeController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('product.show',compact('category', 'product'));
    }
    public function show($id){
       // $product = Category::findOrFail($id)->products()->get();
       $categoryAll = Category::all();
       $category = Category::with('products')->where('id','=',$id)->first();
        return view('product.show',compact('categoryAll','category'));
    }
}
