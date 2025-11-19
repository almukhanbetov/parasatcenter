<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $subjects = Subject::all();
        return view('/admin/user/create', compact('subjects'));
    }
}
