<?php

namespace YoungLife\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function send(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('noreply@ylcampman.com', 'YLCam ManSys');

            $message->to('mphatsomm@gmail,com');

        });

        return response()->json(['message' => 'Request completed']);
    }
}
