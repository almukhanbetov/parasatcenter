<?php

namespace App\Http\Controllers\Admin\CourseDetail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseDetail\StoreRequest;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        CourseDetail::firstOrCreate($data);

        return redirect()->route('admin.course-detail.index')->with('success', "Сохранено");
    }
}
