<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Student\UpdateRequest;
use App\Models\Student;
use App\Models\StudentImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Student $student)
    {
        $data = $request->validated();

        // ⚠️ Удаляем ключ images, т.к. он не должен идти в students
        unset($data['images']);

        // Обновление основного сертификата
        if ($request->hasFile('image')) {

            // удаляем старый PDF
            if ($student->image && Storage::disk('public')->exists("students/{$student->image}")) {
                Storage::disk('public')->delete("students/{$student->image}");
            }

            $imageName = Str::random(32) . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('students', $imageName, 'public');
            $data['image'] = $imageName;
        }

        // Обновляем данные студента
        $student->update($data);

        // Если загрузили новые дополнительные PDF
        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $file) {
                $name = Str::random(32) . '.' . $file->extension();
                $file->storeAs('students/gallery', $name, 'public');

                StudentImage::create([
                    'student_id' => $student->id,
                    'image' => $name
                ]);
            }
        }

        return redirect()
            ->route('admin.student.index')
            ->with('success', 'Студент обновлён');
    }
}
