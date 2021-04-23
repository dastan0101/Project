<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function login() {
        return view('login');
    }

    public function store(Request $request) {
        
        $student = new Student();

        $student->full_name = $request->input('full_name');
        $student->gmail = $request->input('gmail');
        $student->password = $request->input('password');

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/student/', $filename);
            $student->photo = $filename;
        }
        else {
            return $request;
            $student->photo = '';
        }
        

        $student->save();
        return view('login')->with('student', $student);
    }
}
