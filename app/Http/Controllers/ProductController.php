<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function index () {
        $products = DB::table('products')->get();
        return view('products', ['products' => $products]);
    }

    public function create() 
    {
        return view('pages/create-product');
    }

    public function store() 
    {
        
        $data = request()->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'category_name' => 'required|string|max:255'

        ]);

        $product= new Product;
        $product->product_name = $data['product_name'];
        $product->quantity = $data['quantity'];
        $product->category_name = $data['category_name'];
        $product->save();
    
        return redirect('/products');

    }
}
