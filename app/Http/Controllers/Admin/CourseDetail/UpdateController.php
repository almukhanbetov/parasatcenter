<?php

namespace App\Http\Controllers\Admin\CourseDetail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseDetail\UpdateRequest;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CourseDetail $courseDetail)
    {

        $data = $request->validated();

        $courseDetail->update($data);
        return redirect()->route('admin.course-detail.index')->with('success', "Изменено");
    }
}
