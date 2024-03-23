<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){

        return view('category.index');

    }

    public function add(){


            $validator = validator(request()->all(),[
     
                'title' => 'required',
             
             
             ]);
     
             if($validator->fails()) {
                 return back()->withErrors($validator);
             }
     

        $category = new Category;
        $category->title = request()->title;
        $category->save();

        return redirect('/category')->with('info', "Data is added successfully");

    }
}
