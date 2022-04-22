<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Show all student 
     */
    public function index()
    {
        return view('student.index');
    }


    /**
     * Show all student 
     */
    public function show($id)
    {
        return view('student.single');
    }

    /**
     * Student Create 
     */
    public function create()
    {
        return view('student.create'); 
    }


    /**
     * Student Create 
     */
    public function edit($id)
    {
        return view('student.edit'); 
    }


    /**
     * Student create 
     */
    public function store(Request $request)
    {


        if( $request -> hasfile('photo') ){
            $img = $request -> file('photo');
            $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
            $img -> move(public_path('photos'), $file_name);

        }else {
            $file_name = NULL;
        }


        Student::create([
            'name'      => $request -> name,
            'email'      => $request -> email,
            'cell'      => $request -> cell,
            'photo'      =>  $file_name,
        ]);

        return back();
    }

}
