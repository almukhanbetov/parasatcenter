<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class CourseDetailController extends Controller
{
    public function index($id)
    {
        $course = Course::find($id);
        // foreach($course->details as $detail){
        //     echo $detail->title."<br>";
        // }

        return view('courses.index', compact('course'));
    }

    public function show($id)    {
       
        $detail = CourseDetail::findOrFail($id);
        

        return view('courses.show', compact('detail'));
    }
}
