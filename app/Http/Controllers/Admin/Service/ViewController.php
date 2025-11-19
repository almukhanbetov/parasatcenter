<?php

namespace App\Http\Controllers\Admin\Service;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke(Service $service)
    {
        
        return view("admin.service.view", compact('service'));
    }
}
