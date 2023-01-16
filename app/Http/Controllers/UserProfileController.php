<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\studentProfileRecord;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //
    public function index()
    {
        // $studentProfile = studentProfileRecord::orderBy('id','desc')->paginate(5);
        // return view('studentProfile.create', compact('student'));
        $studentProfile = studentProfileRecord::all();
        return view('Manage Registration.Student.addStudentProfile.index', compact('studentProfile'));
    }

    public function create(){
        return view('addStudentProfile');
        // return view('studentProfile.create');
    }

    public function store(Request $request)
        {
        $request->validate([
            'student_id'    =>  'required',
            'student_name'    =>  'required',
            'student_email'    =>  'required|email',
            'password'    =>  'required'
        ]);

        studentProfileRecord::create($request->post());

        return redirect()->route('studentProfile.create')->with('success','Data have been saved successfully.');

        $ProfileRecord = new studentProfileRecord();

        $ProfileRecord->student_id = $request->student_id;
        $ProfileRecord->student_name = $request->student_name;
        $ProfileRecord->student_email = $request->student_email;
        $ProfileRecord->studentPhone_num = $request->studentPhone_num;
        $ProfileRecord->student_gender = $request->student_gender;
        $ProfileRecord->home_address = $request->home_address;
        $ProfileRecord->program = $request->program;
        $ProfileRecord->program = $request->program;

        $studentProfile->save();

        return redirect()->route('addStudent.index')->with('success','student added successfully.');
        
            // $student_id = $request->input('student_id');
            // $student_name = $request->input('student_name');
            // $student_email = $request->input('student_email');
            // $studentPhone_num = $request->input('studentPhone_num');
            // $student_gender = $request->input('student_gender');
            // $home_address = $request->input('home_address');
            // $program = $request->input('program');
            // $password = $request->input('password');

        // $data=array('student_id'=>$student_id,"student_name"=>$student_name,"student_email"=>$student_email,"studentPhone_num"=>$studentPhone_num,"student_gender"=>$student_gender,"home_address"=>$home_address,"program"=>$program,"password"=>$password);
        // DB::table('student_profile_records')->insert($data);
        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';
        

    // public function create(){
    //     return view('')
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }
}
