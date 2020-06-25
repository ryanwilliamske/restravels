<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the chats panel view
     */
    public function index()
    {
        return view('chat');
    }

    /**
     * Fetch all the user messages 
     */

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    /**
     * Push message to the database
     */

     public function sendMessage()
     {
         $user  = Auth::user();

         $message = $user->messages()->create([
            'message' => $request->input('message')
         ]);

         broadcast(new MessageSent($user, $message))->toOthers();

         return ['status' => 'Message Sent!'];
     }
}
