<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessPoint;
use App\Models\Hardware;
use App\Models\SwitchHub;

class LaporanController extends Controller
{
    public function index()
    {
        $list_ap = AccessPoint::with('brand', 'lokasi')->get();
        $list_hardware = Hardware::with('brand', 'lokasi')->get();
        $list_switch = SwitchHub::with('brand', 'lokasi')->get();

        $from_date = '';
        $end_date = '';
        
        return view('pages.laporan.index', [
            'list_ap' => $list_ap,
            'list_hardware' => $list_hardware,
            'list_switch' => $list_switch,
            'from_date' => $from_date,
            'end_date' => $end_date
        ]);
    }

    public function filter(Request $request){
        $list_ap = AccessPoint::join('brands', 'brands.id', '=', 'access_points.idbrand')
            ->join('lokasis', 'lokasis.id', '=', 'access_points.idlok')
            ->select('access_points.*', 'brands.nama_brand', 'brands.tipe_brand', 'lokasis.nama_lokasi', 'lokasis.unit', 'lokasis.sublokasi')
            ->where('access_points.tgl_inventaris', '>=', $request->from_date)
            ->where('access_points.tgl_inventaris', '<=', $request->end_date)
            ->get();
        
        $list_hardware = Hardware::join('brands', 'brands.id', '=', 'hardware.idbrand')
            ->join('lokasis', 'lokasis.id', '=', 'hardware.idlok')
            ->select('hardware.*', 'brands.nama_brand', 'brands.tipe_brand', 'lokasis.nama_lokasi', 'lokasis.unit', 'lokasis.sublokasi')
            ->where('hardware.tgl_inventaris', '>=', $request->from_date)
            ->where('hardware.tgl_inventaris', '<=', $request->end_date)
            ->get();
        
        $list_switch = SwitchHub::join('brands', 'brands.id', '=', 'switch_hubs.idbrand')
            ->join('lokasis', 'lokasis.id', '=', 'switch_hubs.idlok')
            ->select('switch_hubs.*', 'brands.nama_brand', 'brands.tipe_brand', 'lokasis.nama_lokasi', 'lokasis.unit', 'lokasis.sublokasi')
            ->where('switch_hubs.tgl_inventaris', '>=', $request->from_date)
            ->where('switch_hubs.tgl_inventaris', '<=', $request->end_date)
            ->get();
        
        return view('pages.laporan.index', [
            'list_ap' => $list_ap,
            'list_hardware' => $list_hardware,
            'list_switch' => $list_switch,
            'from_date' => $request->from_date,
            'end_date' => $request->end_date
        ])->with('success', 'Data berhasil ditampilkan dari tanggal '.$request->from_date.' s/d '.$request->end_date);
    }
}
