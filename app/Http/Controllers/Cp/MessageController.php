<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Guest;

class MessageController extends Controller
{
    public function index()
    {
        // $data = 
        // dd($data->nam);
        return view('Backend.Message.index',[
            'message' => Message::with(['guest'])->get()
        ]);
    }
}
