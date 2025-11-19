<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Course $course)
    {
        // Удаление файла, если есть
        if ($course->image && file_exists(storage_path('app/public/courses/' . $course->image))) {
            unlink(storage_path('app/public/courses/' . $course->image));
        }

        $course->delete();

        return redirect()->route('admin.course.index')->with('success', 'Курс успешно удален');
    }
}
