<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;

class MathController extends Controller
{
    //
    public function index(){
        return view('math.index');
    }

    public function store(){
        $student = new Article();
        $student->name = request()->name;
        $student->address = request()->address;
        $student->department = request()->department;
        $student->phone_number = request()->phone_number;
        $student->save();

        return redirect('/math');

    }
}
