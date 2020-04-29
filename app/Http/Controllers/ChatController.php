<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function Chat(){
        return view('Chat');
    }
    public function show()
    {
        return view('components.chat.chatModal');
    }
}
