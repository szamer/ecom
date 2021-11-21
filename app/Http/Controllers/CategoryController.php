<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index () {
        $categories = DB::table('categories')->get();
        return view('categories', ['categories' => $categories]);
    }

    public function create() 
    {
        return view('pages/create-category');
    }

    public function store() 
    {
        
        $data = request()->validate([
            'title' => 'required|string|max:255'
        ]);
        $category= new Category;
        $category->title = $data['title'];
        $category->save();
    
        return redirect('/categories');

    }
}
