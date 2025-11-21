<?php

namespace App\Http\Controllers\Admin\CourseDetail;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke(CourseDetail $course)
    {      
        $image_path = public_path('/storage/courses-detail/'.$course->image);
//        if(file_exists($image_path)){
//            unlink($image_path);
//        }
//        $course->delete();
//        return redirect()->route('admin.course.index')->with('success', 'Удалили');

    }
}
