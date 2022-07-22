<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SSID;
use App\Models\Lokasi;

class SSIDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = SSID::with(['lokasi'])->get();
        $list_lokasi = Lokasi::all();
        $list_jenis = ['Intranet', 'Internet', 'Intranet dan Internet'];

        return view('pages.ssid.index', [
            'items' => $items,
            'list_lokasi' => $list_lokasi,
            'list_jenis' => $list_jenis,
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
        $data = $request->all();
        SSID::create($data);
        return redirect()->route('ssid.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        SSID::find($id)->update($data);
        return redirect()->route('ssid.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SSID::find($id)->delete();
        return redirect()->route('ssid.index')->with('success', 'Data berhasil dihapus');
    }
}
