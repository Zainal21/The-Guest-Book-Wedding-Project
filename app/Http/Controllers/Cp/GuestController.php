<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('Backend.Guest.index');
    }

    public function create()
    {
        return view('Backend.Guest.create');
    }


    public function store(Request $req)
    {
        // store data to database
    }

    public function edit()
    {
        // show from edit Guest
    }

    public function update(Request $req, $id)
    {
        // update data  Guest
    }

    public function destroy($id)
    {
        // delete data Guest
    }
}
