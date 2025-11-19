<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\UpdateRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Course $course)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = Str::random(32).".".$file->getClientOriginalExtension();
            $file->storeAs('courses', $data['image'], 'public');
        }
        $course->update($data);

        return redirect()->route('admin.course.index')->with('success', "Изменено");
    }
}
