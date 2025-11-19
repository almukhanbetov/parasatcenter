<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke(Course $course)
    {

        return view("admin.course.view", compact('course'));
    }
}
