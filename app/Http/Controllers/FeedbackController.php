<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function send(Request $request)
    {


        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);
     

        Mail::to('almuko.m@gmail.com')->send(new FeedbackMail($data));

        return back()->with('success', 'Ваше сообщение отправлено!');
    }
}
