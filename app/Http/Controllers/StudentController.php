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

        $data = Student::all();
        return view('student.index', [
            'all_data'      => $data
        ]);
    }


    /**
     * Show all student 
     */
    public function show($id)
    {
        $data = Student::find($id);
        return view('student.single', [
            'student'   => $data
        ]);
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

        //validation 
        $this -> validate($request, [
            'name'      => 'required',
            'email'      => 'required|email|unique:students',
            'cell'      => 'required|starts_with:01,8801,+8801|unique:students',
        ],[
            'name.required'     => 'নামের ঘরটি পূরণ করুন',
            'email.required'     => 'ইমেইলের ঘরটি পূরন করুন',
            'cell.required'     => 'পাসওয়ার্ডের ঘরটি পূরন করুন',
            'email.email'     => 'ইমেলটি সঠিক নয়',
            'email.unique'     => 'ইমেইলটি নিয়ে নেয়া হয়েছে',
        ]);


        // Image uplaod
        if( $request -> hasfile('photo') ){
            $img = $request -> file('photo');
            $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
            $img -> move(public_path('photos'), $file_name);

        }else {
            $file_name = NULL;
        }

        // Data store to table 
        Student::create([
            'name'      => $request -> name,
            'email'      => $request -> email,
            'cell'      => $request -> cell,
            'photo'      =>  $file_name,
        ]);

        // return back 
        return back() -> with('success', 'Student created successful');
    }

    /**
     * Destroy 
     */
    public function destroy($id)
    {
        $data = Student::find($id);
        $data -> delete();
        return back() -> with('success', 'Data Deleted');
    }

}
