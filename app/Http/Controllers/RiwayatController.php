<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\AccessPoint;
use App\Models\Hardware;
use App\Models\SwitchHub;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = History::all();
        $list_ap = AccessPoint::join('brands', 'brands.id', '=', 'access_points.idbrand')->select('access_points.*', 'brands.nama_brand', 'brands.tipe_brand')->get();
        $list_hardware = Hardware::join('brands', 'brands.id', '=', 'hardware.idbrand')->select('hardware.*', 'brands.nama_brand', 'brands.tipe_brand')->get();
        $list_switch = SwitchHub::join('brands', 'brands.id', '=', 'switch_hubs.idbrand')->select('switch_hubs.*', 'brands.nama_brand', 'brands.tipe_brand')->get();

        return view('pages.riwayat.index', [
            'items' => $items,
            'list_ap' => $list_ap,
            'list_hardware' => $list_hardware,
            'list_switch' => $list_switch,
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
        $data['tanggal'] = date('Y-m-d', strtotime($data['tanggal']));
        History::create($data);
        return redirect()->route('riwayat.index')->with('success', 'Data berhasil ditambahkan');
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
        History::destroy($id);
        return redirect()->route('riwayat.index')->with('success', 'Data berhasil dihapus');
    }
}
