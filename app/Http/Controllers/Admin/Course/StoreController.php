<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\StoreRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = Str::random(32).".".$file->getClientOriginalExtension();
            $file->storeAs('courses', $data['image'], 'public');

        }
        Course::firstOrCreate($data);

        return redirect()->route('admin.course.index')->with('success', "Сохранено");
    }
}
