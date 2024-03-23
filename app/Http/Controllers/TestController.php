<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){

        $data= Article::paginate(5);

        return view('test.index', ['ddd'=> $data]);
    }

    public function add(){

        $data = Category::all();

        return view('test.addform', ['categories' => $data]);
       
    }

    public function create(){

       $validator = validator(request()->all(),[

        'name'   => 'required',
        'address'   => 'required',
        'department'   => 'required',
        'phone_number'   => 'required',
        
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

       $article = new Article;
       $article->name = request()->name;
       $article->address = request()->address;
       $article->department = request()->department;
       $article->phone_number = request()->phone_number;
       $article->save();

       return redirect('/test')->with('info', 'Student is added successfully');

       }

    public function delete($id){
        $test = Article::find($id);
        $test->delete();
        
        return redirect('/test')->with('success', 'Data deleted successfully.');
      

    }

    public function view($id){
        $stu = Article::find($id);

        return view('test.view', ['student' => $stu]);
    }


    public function edit($id){

        $data = Article::findOrFail($id); 

        return view('test.edit', ['data'=> $data]);
    }
    
    public function update(Request $request, $id)
{
    $stu = Article::findOrFail($id);

    // Validate the request data as needed

    $stu->update($request->all());

    return redirect('/test')->with('success', 'Model updated successfully.');
}
    
   
    
}
