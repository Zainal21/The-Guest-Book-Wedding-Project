<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Str;
use  Illuminate\Support\Facades\Crypt;

class EventController extends Controller
{
    public function index()
    {
        return view('Backend.Event.index',[
            'events' => Event::all()
        ]);
    }
    public function create()
    {
        return view('Backend.Event.create');
    }

    public function edit($id)
    {
       $_id = Crypt::decrypt($id);
        return view('Backend.Event.edit',[
            'event' => Event::findOrfail($_id)
        ]);
    }

    public function save(Request $req, $id=false)
    {
        $req->validate([
            'nama_acara' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048', 
        ]);    
        $file = $req->file('image');
        $image = $file->move('uploads/event/', time(). '-' . Str::limit(Str::slug('Event'), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
            Event::create([
                'nama_acara' => $req->nama_acara,
                'waktu' => $req->waktu,
                'tanggal' => $req->tanggal,
                'deskripsi' => $req->deskripsi,
                'image' => $image
        ]);
        return redirect()->route('event.index')->with('status', 'Data Event Berhasil ditambahkan');
        // store to dababase
    }
    public function update($id, Request $req)
    {
        $req->validate([
            'nama_acara' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048', 
        ]);
        $event = Event::findOrfail($id);
        if($req->hasFile('image')){
            if(file_exists($event->image)){
                unlink($event->image);
            }
        }
        $file = $req->file('image'); 
        $image = $file->move('uploads/event/', time(). '-' . Str::limit(Str::slug('Event'), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
        $event->update([
            'nama_acara' => $req->nama_acara,
            'waktu' => $req->waktu,
            'tanggal' => $req->tanggal,
            'deskripsi' => $req->deskripsi,
            'image' => !empty($image) ? $image : $event->cover
        ]);
        return redirect()->route('event.index')->with('status', 'Data Event Berhasil diperbarui');
    }
}
