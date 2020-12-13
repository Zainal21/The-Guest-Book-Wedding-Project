<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('Backend.Guest.index',[
            'guests' => \App\Models\Guest::all()
        ]);
    }

}
