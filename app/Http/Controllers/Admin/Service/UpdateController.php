<?php

namespace App\Http\Controllers\Admin\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\UpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Service $service)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = Str::random(32).".".$file->getClientOriginalExtension();
            $file->storeAs('services', $data['image'], 'public');
        }
        $service->update($data);

        return redirect()->route('admin.service.index')->with('success', "Изменено");
    }
}
