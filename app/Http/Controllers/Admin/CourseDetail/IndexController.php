<?php

namespace App\Http\Controllers\Admin\CourseDetail;

use App\Http\Controllers\Controller;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $courses = CourseDetail::all();  

        return view('admin.course-detail.index', compact('courses'));
    }
}
