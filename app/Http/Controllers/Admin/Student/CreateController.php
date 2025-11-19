<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Firm;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        $firms = Firm::all();
        return view('/admin/student/create', compact('courses', 'firms'));
    }
}
