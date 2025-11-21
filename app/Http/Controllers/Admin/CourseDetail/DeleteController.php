<?php

namespace App\Http\Controllers\Admin\CourseDetail;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(CourseDetail $course)
    {      
    
        $course->delete();

        return redirect()->route('admin.course-detail.index')->with('success', 'Курс успешно удален');
    }
}
