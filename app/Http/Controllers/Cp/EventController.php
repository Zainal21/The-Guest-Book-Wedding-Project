<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

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

    public function save(Request $req, $id=false)
    {
        $req->validate([
            'nama_acara' => 'required',
            'nama_acara' => 'required',
            'nama_acara' => 'required',
        ]);

        if($id){
            Event::where(['id' => $id])->update([

            ]);
            return redirect()->route('event.index')->with('status', 'Data Event Berhasil diperbarui');
        }else{
            Event::create([
                            
            ]);
            return redirect()->route('event.index')->with('status', 'Data Event Berhasil ditambahkan');
        }
            
        // store to dababase
    }
    


}
