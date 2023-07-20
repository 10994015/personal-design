<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SendMailController extends Controller
{
    public function send(Request $request){
        if($request['name'] != "" && $request['name'] != NULL && $request['email'] != "" && $request['email'] != NULL && $request['content'] != "" && $request['content'] != NULL){
            SendMailQueue::dispatch([
                'name'=> $request['name'],
                'email'=> $request['email'],
                'content'=> $request['content'],
            ]);
        }
    }
}
