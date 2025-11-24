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
        //     $phone = '77013801011'; // твой номер без +
        //     $apikey = 'API_KEY_ОТСЮДА'; // вставь сюда ключ, который вернёт CallMeBot

        //     $message = "
        //     📩 *Новое сообщение с сайта Parasat Center*\n
        //     👤 *Имя:* {$data['name']}\n
        //     📧 *Email:* {$data['email']}\n
        //     💬 *Сообщение:* {$data['message']}\n
        //     🕒 Время: " . now()->format('Y-m-d H:i') . "
        //     ";

        // $text = urlencode($message);

        // file_get_contents("https://api.callmebot.com/whatsapp.php?phone=$phone&text=$text&apikey=$apikey");


        Mail::to('ruc.parasat@mail.ru')->send(new FeedbackMail($data));


        return back()->with('success', 'Ваше сообщение отправлено!');
    }
}
