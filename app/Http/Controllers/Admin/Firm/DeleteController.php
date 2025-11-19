<?php

namespace App\Http\Controllers\Admin\Firm;
use App\Http\Controllers\Controller;

use App\Models\Firm;
use Illuminate\Http\Request;


class DeleteController extends Controller
{
    public function __invoke(Firm $firm)
    {
        $firm->delete();
        return redirect()->route('admin.firm.index')->with('success', "Компания удалена");
    }
}
