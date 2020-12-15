<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Backend.Dashboard',[
            'guest' => \App\Models\Guest::count(),
            'message' => \App\Models\Message::count(),
            'event' => \App\Models\Event::count(),
            'gallery' => \App\Models\Gallery::count(),
            'guests' => \App\Models\Guest::all(),
            'message_list' => \App\Models\Message::with(['guest'])->get()
        ]); 
    }
}
