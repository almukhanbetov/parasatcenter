<?php

namespace App\Http\Controllers\Admin\Service;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke(Course $course)
    {
        dd($course);
        $image_path = public_path('/storage/courses/'.$course->image);
//        if(file_exists($image_path)){
//            unlink($image_path);
//        }
//        $course->delete();
//        return redirect()->route('admin.course.index')->with('success', 'Удалили');

    }
}
