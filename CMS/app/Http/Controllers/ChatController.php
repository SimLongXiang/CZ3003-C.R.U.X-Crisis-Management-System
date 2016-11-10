<?php

namespace CRUX\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
	
 public function index(){
return view('chat.index');
}

public function chat(){
$user = Auth::user();
return view('chat.chat',compact('user'));
}


public function store(Request $request)
{
$pusher_user['name'] = $request->name;
$pusher_user['chat_room_id'] = $request->chat_room_id;
$user = User::firstOrCreate($pusher_user);
Auth::loginUsingId($user->id);
return redirect('/chat/chat');
}

public function getMessage(Request $request)
{
$user = Auth::user();
$channel = $user->chat_rooms['name'];

LaravelPusher::trigger($channel, 'message', array('message'=>$request->msj,'sender_name'=>$user->name),$request->socket_id);
echo json_encode(array('message'=>$request->msj));
}
	
}
