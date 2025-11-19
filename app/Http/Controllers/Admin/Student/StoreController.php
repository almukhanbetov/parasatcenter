<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Student\StoreRequest;
use App\Models\Student;
use App\Models\StudentImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
      
        // Сохраняем основное фото
        $imageName = uniqid().'.'.$request->file('image')->extension();
        $request->file('image')->storeAs('students', $imageName, 'public');

        // Создаём студента
        $student = Student::create([
            'lastname' => $data['lastname'],
            'iin' => $data['iin'] ?? null,
            'course_id' => $data['course_id'] ?? null,
            'firm_id' => $data['firm_id'] ?? null,
            'image' => $imageName,
        ]);

        // Сохраняем дополнительные фото
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $name = uniqid().'.'.$file->extension();
                $file->storeAs('students/gallery', $name, 'public');

                StudentImage::create([
                    'student_id' => $student->id,
                    'image' => $name
                ]);
            }
        }


        return redirect()->route('admin.student.index')->with('success', "Студент добавлен");
    }
}
