<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('Backend.Event.index');
    }
    public function create()
    {
        return view('Backend.Event.create');
    }

    public function store(Request $req)
    {
        // store to dababase
    }
    public function destroy($id)
    {
        // delete from database
    }

    public function message()
    {
        return view('Backend.Message.index');
    }


}
