<?php

namespace App\Http\Controllers\Admin\Student;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke(Student $student)
    {

        return view("admin.student.view", compact('student'));
    }
}
