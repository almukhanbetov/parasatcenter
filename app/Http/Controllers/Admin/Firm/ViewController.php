<?php

namespace App\Http\Controllers\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Firm;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke(Firm $firm)
    {

        return view("admin.firm.view", compact('firm'));
    }
}
