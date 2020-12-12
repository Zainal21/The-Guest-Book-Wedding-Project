<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmbedController extends Controller
{
    public function index()
    {
        return view('Backend.Maps.index');
    }
}
