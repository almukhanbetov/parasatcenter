<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\Kind;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Service $service)
    {
        return view("admin.service.edit", compact('service'));
    }
}
