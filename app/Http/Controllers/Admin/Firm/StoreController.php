<?php

namespace App\Http\Controllers\Admin\Firm;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Firm\StoreRequest;
use App\Models\Firm;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
       

        Firm::firstOrCreate($data);

        return redirect()->route('admin.firm.index')->with('success', "Компания добавлена");
    }
}
