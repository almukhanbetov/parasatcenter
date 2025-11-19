<?php

namespace App\Http\Controllers\Admin\Firm;

use App\Http\Controllers\Controller;
use App\Models\Firm;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $firms = Firm::all();
        return view('admin.firm.index', compact('firms'));
    }
}
