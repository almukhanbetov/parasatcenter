<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $students = Student::all();
        
        return view('admin.student.index', compact('students'));
    }
}
