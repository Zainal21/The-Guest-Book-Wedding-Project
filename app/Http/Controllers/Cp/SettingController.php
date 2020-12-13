<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function index() 
    {
        return view('Backend.Settings.index',['setting' => Setting::where(['id' => 1])->first()]);
    }
    public function update(Request $req)
    {
        $setting = Setting::where(['id' => 1])->first();
        if($req->hasFile('logo')){
            if(file_exists($setting->logo)){
                unlink($setting->logo);
            }
            $file = $req->file('logo');
            $logo = $file->move('uploads/logo/', time(). '-' . Str::limit(Str::slug('Logo'), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
        }
        Setting::where(['id' => 1])->update([
            'nama_website' => $req->nama_website,
            'kode_analitic' => $req->kode_analitic,
            'logo' =>  !empty($logo) ? $logo : $setting->logo
        ]);
        return redirect()->back()->with('Status', 'Data Website berhasil diperbarui');
        // update data setting from database
    }
}