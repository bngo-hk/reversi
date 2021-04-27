<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Seeder;

use App\Events\MessageCreated;

class ChatController extends Controller
{
    //
    public function addMessage(Request $request)
    {
      $message = \App\Message::create([
          'body' => $request->message
      ]);
      event(new MessageCreated($message));
    }

    //Messageの一覧を取得するメソッド
    public function showMessage()
    {
        return \App\Message::orderBy('id','desc')->get();
    }
}
