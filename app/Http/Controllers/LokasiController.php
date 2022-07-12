<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Lokasi::all();

        $list_nama_lokasi = [
            [
                "nama" => "Kantor Korporat",
                "unit" => ['Divisi General Affair', 'Divisi Humas', 'Divisi SDM', 'Divisi Internal Audit', 'Divisi Keuangan', 'Divisi PPRM', 'Divisi Operasi', 'Divisi Project', 'Divisi HSE', 'Divisi Commercial', 'Divisi BUSDEV', 'Divisi Procurement']
            ],
            [
                "nama" => "Unit Bisnis Service",
                "unit" => ['Kantor Pelayanan Batam Center', 'Kantor Pelayanan Nagoya', 'Kantor Pelayanan Tiban', 'Kantor Pelayanan Batu Aji', 'Kantor SBU']
            ],
            [
                "nama" => "Unit Bisnis Infrastruktur",
                "unit" => ['Kantor UB Infra']
            ],
            [
                "nama" => "Unit Bisnis Gtrans",
                "unit" => ['Kantor UB Gtran', 'Gudang Gtran Baloi', 'PLTD Batu Ampar', 'PLTD Baloi', 'PLTMG Panaran', 'GI Panaran', 'PLTU Tg Kasam', 'GI Tg Kasam', 'PLTD Batu Ampar', 'GI Sengkuang', 'PLTGU Tg Uncang', 'GI Tanjung Uncang', 'GI Sagulung', 'GI Sei Harapan', 'GI Baloi', 'GI Muka Kuning', 'GI Nongsa', 'Gi Batu Besar', 'PLTD Sekupang']
            ],
            [
                "nama" => "Unit Bisnis BES",
                "unit" => ['Kantor BES Jakarta', 'MPP Lampung', 'MPP Bangka', 'MPP Belitung', 'MPP Pontianak', 'MPP Duri', 'MPP Medan', 'MPP Nias', 'MPP Lombok']
            ],
        ];

        return view('pages.lokasi.index', [
            "items" => $items,
            "list_nama_lokasi" => $list_nama_lokasi,
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
        Lokasi::create($data);
        return redirect()->route('lokasi.index');
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
        $item = Lokasi::find($id);
        $item->update($data);
        return redirect()->route('lokasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Lokasi::find($id);
        $item->delete();
        return redirect()->route('lokasi.index');
    }
}
