<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //public
    public function create(){
        return view('createCategory');
    }
    public function store (Request $request){
        Category ::create([
            'nama'=>$request->name
          
        ]);
        return redirect('/home');
    }
}
