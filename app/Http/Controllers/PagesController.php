<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('Site.index',[
            'event' => \App\Models\Event::all(),
            'gallery' => \App\Models\Gallery::all()
        ]);
    }
    public function sendMessage(Request $req)
    {
       $guest = \App\Models\Guest::create([
           'nama' => $req->nama,
           'email' => $req->email,
           'alamat' => $req->alamat,
           'acara_hadir' => $req->acara_hadir
       ]);
       \App\Models\Message::create([
           'guest_id' => $guest->id,
           'pesan' => $req->pesan,
           'no_hp' => $req->no_hp
       ]);
       return redirect()->back();
    }
}
