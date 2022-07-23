<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::all();

        return view('pages.user.index', [
            "items" => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ( !preg_match("#[0-9]+#", $request['password']) ) {
            return redirect()->route('user.index')->with('error', 'Password harus mengandung huruf besar, huruf kecil, angka dan simbol.');
        }
    
        if ( !preg_match("#[a-z]+#", $request['password']) ) {
            return redirect()->route('user.index')->with('error', 'Password harus mengandung huruf besar, huruf kecil, angka dan simbol.');
        } 
    
        if ( !preg_match("#[A-Z]+#", $request['password']) ) {
            return redirect()->route('user.index')->with('error', 'Password harus mengandung huruf besar, huruf kecil, angka dan simbol.');
        }
    
        if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $request['password']) ) {
            return redirect()->route('user.index')->with('error', 'Password harus mengandung huruf besar, huruf kecil, angka dan simbol.');
        }
        
        User::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'uid' => $request['uid'],
            'password' => Hash::make($request['password']),
            'jabatan' => $request['jabatan'],
            'akses' => $request['akses'],
        ]);

        return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resetpass($id)
    {
        $defaultpass = Hash::make('init123#');
        $user = User::find($id);
        $user->password = $defaultpass;
        $user->save();
        return redirect()->route('user.index')->with('success', 'Password berhasil di reset');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if($data['password'] == ""){
            unset($data['password']);
        }else{
            $data['password'] = Hash::make($data['password']);
        }

        $item = User::findOrFail($id);
        $item->update($data);
        return redirect()->route('user.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
    }
}
