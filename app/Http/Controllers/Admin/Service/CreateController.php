<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();

      
        return view('/admin/service/create', compact('services'));
    }
}
