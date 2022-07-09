<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('pages.auth.login');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            $user = User::where('email', $request->email)->first();
            $request->session()->put('user', $user);
        
            if($user->akses == 'STAFF'){
                return redirect('/staff');
            }else if($user->akses == 'TEKNISI'){
                return redirect('/teknisi');
            }else{
                return redirect('/manager');
            }
        }

        return back()->with('loginError', 'Email atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
