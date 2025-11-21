<?php

namespace App\Http\Controllers\Admin\CourseDetail;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke(CourseDetail $course)
    {
        dd($course);
        return view("admin.course-detail.view", compact('course'));
    }
}
