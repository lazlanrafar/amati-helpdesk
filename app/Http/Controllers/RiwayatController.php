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
        $items = History::with('user')->get();
        $list_ap = AccessPoint::with('brand', 'lokasi')->get();
        $list_hardware = Hardware::with('brand', 'lokasi')->get();
        $list_switch = SwitchHub::with('brand', 'lokasi')->get();
        $list_jenis_history = ['Perbaikan', 'Pemeliharaan'];

        return view('pages.riwayat.index', [
            'items' => $items,
            'list_ap' => $list_ap,
            'list_hardware' => $list_hardware,
            'list_switch' => $list_switch,
            'list_jenis_history' => $list_jenis_history,
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
        if($data['jenis_history'] == 'Perbaikan'){
            if($data['kerusakan'] == ''){
                return redirect()->route('riwayat.index')->with('error', 'Jika status historynya perbaikan, maka kerusakan harus diisi');
            }
        }
        if($data['kerusakan'] == ''){
            $data['kerusakan'] = '-';
        }
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['tanggal'] = date('Y-m-d', strtotime($data['tanggal']));
        History::find($id)->update($data);
        return redirect()->route('riwayat.index')->with('success', 'Data berhasil diubah');
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
