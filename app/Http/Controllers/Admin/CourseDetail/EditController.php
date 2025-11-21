<?php

namespace App\Http\Controllers\Admin\CourseDetail;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(CourseDetail $courseDetail)
    {
        $courses = Course::all();
        return view("admin.course-detail.edit", compact('courseDetail','courses'));
    }
}
