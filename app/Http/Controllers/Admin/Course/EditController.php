<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Kind;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Course $course)
    {

        

        return view("admin.course.edit", compact('course'));
    }
}
