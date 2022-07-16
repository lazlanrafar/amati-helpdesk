<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('pages.auth.ganti-password');
    }

    public function update(Request $request, $id){
        if(!Hash::check($request->password, auth()->user()->password)){
            return back()->with("password_error", "Password Lama Salah");
        }

        if($request->new_password != $request->confirm_new_password){
            return back()->with("password_nosame", "Password Baru dan Konfirmasi Password Baru Tidak Sama");
        }

        User::whereId($id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/')->with('passwordberhasil', 'Password Berhasil Diubah');
    }
}
