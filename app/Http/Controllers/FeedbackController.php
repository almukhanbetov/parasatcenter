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
        // --- Отправка WhatsApp администратору ---
        $phone = '77077801011'; // твой номер без +
        $apikey = 'API_KEY_ОТСЮДА';
        $text = urlencode("Новое сообщение с сайта:
        Имя: {$data['name']}
        Email: {$data['email']}
        Сообщение: {$data['message']}");

    file_get_contents("https://api.callmebot.com/whatsapp.php?phone=$phone&text=$text&apikey=$apikey");


        Mail::to('almuko.m@gmail.com')->send(new FeedbackMail($data));


        return back()->with('success', 'Ваше сообщение отправлено!');
    }
}
