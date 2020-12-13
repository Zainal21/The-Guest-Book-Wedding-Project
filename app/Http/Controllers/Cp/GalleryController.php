<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        return view('Backend.Gallery.index',['galleries' => Gallery::all()]);
    }

    public function save(Request $req)
    {
        $req->validate([
            'image' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);
        $file = $req->file('image');
        $image = $file->move('uploads/gallery/', time(). '-' . Str::limit(Str::slug('Gallery'), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
        Gallery::create(['photo' => $image]);
        return redirect()->back()->with('status', 'Data Photo berhasil ditambahkan');
    }
    public function delete($id)
    {

        if($id){
            $gallery = Gallery::findOrfail($id);
            if(file_exists($gallery->photo)){
                unlink($gallery->photo);
                Gallery::destroy($id);
                return redirect()->back()->with('status', 'Data Photo berhasil Dihapus');
            }
        }
    }
}
