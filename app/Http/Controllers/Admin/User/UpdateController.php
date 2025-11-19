<?php

namespace App\Http\Controllers\Admin\User ;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User ;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, User $user)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $data['image'] = $imageFile->getClientOriginalName();
            $imageFile->storeAs('user', $data['image'], 'public');
        }

        $user->update($data);
        return redirect()->route('admin.user.index')->with('success', "Жаңартылды");

    }
}
