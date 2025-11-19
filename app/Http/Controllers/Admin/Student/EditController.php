<?php

namespace App\Http\Controllers\Admin\Student;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Firm;
use App\Models\Student;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Student $student)
    {
        $courses = Course::all();
        $firms = Firm::all();
        return view("admin.student.edit", compact('student','courses', 'firms'));
    }
}
