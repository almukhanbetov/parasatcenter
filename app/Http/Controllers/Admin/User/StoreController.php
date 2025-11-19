<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;

use App\Models\SubjectUser;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $subject_id = $data['subject_id'];

        if($request->file('image')){
            $image = $request->file('image');
            $data['image'] = $image->getClientOriginalName();
            $image->storeAs('users', $data['image'], 'public');
        }
        $data['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';


        unset($data['subject_id']);

        $user = User::firstOrCreate($data);
//        $flight = Flight::firstOrCreate(
//            ['name' => 'London to Paris'],
//            ['delayed' => 1, 'arrival_time' => '11:30']
//        );
        SubjectUser::firstOrCreate(
            ['subject_id'=>$subject_id],
            ['user_id'=>$user->id]
        );

        return redirect()->route('admin.user.index')->with('success', "Студент қосылды");
    }
}
