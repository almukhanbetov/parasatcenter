<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::paginate(8);
        $subjects = Subject::all();
//        foreach ($subjects as $subject){
//            foreach ($subject as $item){
//                echo $item->users;
//            }
//        }
//        foreach ($users as $user){
//            echo $user->name."<br>";
//            echo "==============="."<br>";
//            foreach ($user->subjects as $subject){
//                echo $subject->name;
//            }
//        }
//        dd("awfafaf");

        return view('admin.user.index', compact('users'));
    }
}
