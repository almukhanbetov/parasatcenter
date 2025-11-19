<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;
use App\Models\Kind;
use App\Models\Service;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function Psy\debug;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
    public function about()
    {
        return view('site.about');
    }
    public function service()
    {
        // $services = Category::all();      

        return view('site.service', compact('services'));
    }
    public function serviceCategory($id)
    {
        // $category = Category::with('services')->findOrFail($id);

        // $services = $category->services;
        // return view('site.service-details', compact('services', 'category'));
    }
    // public function course()
    // {
    //     $kinds = Kind::all();
    //     return view('site.course', compact( 'kinds'));
    // }
    // public function courseKind($id)
    // {
    //     $kind = Kind::with('courses')->findOrFail($id);
    //     $courses = $kind->courses;
    //     return view('site.course-details', compact('courses', 'kind'));
    // }
    public function contact()
    {
        return view('site.contact');
    }
    public function student()
    {
        $students = Student::all();
        return view('site.student', compact('students'));
    }
    public function search(Request $request)
    {
        $iin = $request->input('s');
        $student = Student::where('iin', $iin)->first();

        if ($student) {
            return view('site.student-show', compact('student'));
        } else {
            return view('site.student-error')->with('message', 'Студент не найден');
        }
    }
    public function studentShow(Student $student)
    {
        return view('site.student-show', compact('student'));
    }
    public function document()
    {
        return view('site.document');
    }
}
