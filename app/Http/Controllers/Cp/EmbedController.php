<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Embed;

class EmbedController extends Controller
{
    public function index()
    {
        return view('Backend.Maps.index',[
            'embed' => Embed::where(['id' => 1])->get()
        ]);
    }

    public function save(Request $req)
    {
        $req->validate([
            'embed' => 'required|min:6'
        ]);
        Embed::where(['id' => 1])->update([
            'embed_maps' => $req->embed
        ]);
        return redirect()->back()->with('status', 'Data Maps Embed Berhasil diperbarui');
    }
}
