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
        $list_ap = AccessPoint::join('brands', 'brands.id', '=', 'access_points.idbrand')
            ->join('lokasis', 'lokasis.id', '=', 'access_points.idlok')
            ->select('access_points.*', 'brands.nama_brand', 'brands.tipe_brand', 'lokasis.nama_lokasi', 'lokasis.unit', 'lokasis.sublokasi')
            ->get();

        $list_hardware = Hardware::join('brands', 'brands.id', '=', 'hardware.idbrand')
            ->join('lokasis', 'lokasis.id', '=', 'hardware.idlok')
            ->select('hardware.*', 'brands.nama_brand', 'brands.tipe_brand', 'lokasis.nama_lokasi', 'lokasis.unit', 'lokasis.sublokasi')
            ->get();

        $list_switch = SwitchHub::join('brands', 'brands.id', '=', 'switch_hubs.idbrand')
            ->join('lokasis', 'lokasis.id', '=', 'switch_hubs.idlok')
            ->select('switch_hubs.*', 'brands.nama_brand', 'brands.tipe_brand', 'lokasis.nama_lokasi', 'lokasis.unit', 'lokasis.sublokasi')
            ->get();
        
        
        return view('pages.laporan.index', [
            'list_ap' => $list_ap,
            'list_hardware' => $list_hardware,
            'list_switch' => $list_switch
        ]);
    }
}
