<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use App\Models\Course;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();

        return view('/admin/course/create', compact('courses'));
    }
}
