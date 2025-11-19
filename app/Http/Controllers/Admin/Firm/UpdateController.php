<?php

namespace App\Http\Controllers\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Firm\StoreRequest;
use App\Models\Firm;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Firm $firm)
    {
        $data = $request->validated();
        $firm->update($data);
        return redirect()->route('admin.firm.index')->with('success', "Категория обновлена");

    }
}
