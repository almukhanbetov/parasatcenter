<?php

namespace App\Http\Controllers\Admin\CourseDetail;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();

        return view('/admin/course-detail/create', compact('courses'));
    }
}
