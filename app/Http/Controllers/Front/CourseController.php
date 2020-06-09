<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\Course;


class CourseController extends Controller
{
    //
    public function courseCat($id){
            //because it's only one so we will get by this way
            $data['cat'] = Cat::findOrFail($id);
            $data['courses'] = Course::where('cat_id',$id)->paginate(3);
            return view('front.courses.cat')->with($data);
    }
    public function show($id , $c_id){
        $data['course'] = Course::findOrFail($c_id);
        return view('front.courses.show')->with($data);
    }
}
