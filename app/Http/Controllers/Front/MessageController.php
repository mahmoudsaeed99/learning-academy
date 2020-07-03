<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Message;
use App\Newsletter;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    //
    function newsletter(Request $request){
        $data = $request->validate([
            'email' => 'required|email'
        ]);
        Newsletter::create($data);
        return back();
    }
    function contact(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:191',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);
        Message::create($data);
        return back();
    }
    function enroll(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'name' => 'nullable|string|max:191',
            'spec' => 'nullable|string',
            'course_id' => 'required|exists:courses,id',
        ]);
        $student = Student::create([
            'name'=> $data['name'],
            'spec' => $data['spec'],
            'email' => $data['email'],

        ]);
        $student_id = $student->id;
        DB::table('course_student')->insert([
            'course_id' => $data['course_id'],
            'student_id' => $student_id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return back();
    }
}
