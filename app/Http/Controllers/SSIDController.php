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
        $items = SSID::join('lokasis', 'lokasis.id', '=', 's_s_i_d_s.idlok')
            ->select('s_s_i_d_s.*', 'lokasis.*')
            ->get();
        $list_lokasi = Lokasi::all();

        return view('pages.ssid.index', [
            'items' => $items,
            'list_lokasi' => $list_lokasi,
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
        return redirect()->route('ssid.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
