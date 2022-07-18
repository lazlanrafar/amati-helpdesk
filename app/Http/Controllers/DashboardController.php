<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessPoint;
use App\Models\Hardware;
use App\Models\SwitchHub;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_access_point = AccessPoint::join('lokasis', 'lokasis.id', '=', 'access_points.idlok')
            ->select('access_points.*', 'lokasis.nama_lokasi')
            ->get();
        $list_hardware = Hardware::join('lokasis', 'lokasis.id', '=', 'hardware.idlok')
            ->select('hardware.*', 'lokasis.nama_lokasi')
            ->get();
        $list_switch = SwitchHub::join('lokasis', 'lokasis.id', '=', 'switch_hubs.idlok')
            ->select('switch_hubs.*', 'lokasis.nama_lokasi')
            ->get();

        $card_1_name = 'Kantor Korporat';
        $card_1_total_access_point = $list_access_point->where('nama_lokasi', 'Kantor Korporat')->count();
        $card_1_total_hardware = $list_hardware->where('nama_lokasi', 'Kantor Korporat')->count();
        $card_1_total_switch = $list_switch->where('nama_lokasi', 'Kantor Korporat')->count();
        $card_1_total_all = $card_1_total_access_point + $card_1_total_hardware + $card_1_total_switch;

        $card_2_name = 'Unit Bisnis Service';
        $card_2_total_access_point = $list_access_point->where('nama_lokasi', 'Unit Bisnis Service')->count();
        $card_2_total_hardware = $list_hardware->where('nama_lokasi', 'Unit Bisnis Service')->count();
        $card_2_total_switch = $list_switch->where('nama_lokasi', 'Unit Bisnis Service')->count();
        $card_2_total_all = $card_2_total_access_point + $card_2_total_hardware + $card_2_total_switch;

        $card_3_name = 'Unit Bisnis Infrastruktur';
        $card_3_total_access_point = $list_access_point->where('nama_lokasi', 'Unit Bisnis Infrastruktur')->count();
        $card_3_total_hardware = $list_hardware->where('nama_lokasi', 'Unit Bisnis Infrastruktur')->count();
        $card_3_total_switch = $list_switch->where('nama_lokasi', 'Unit Bisnis Infrastruktur')->count();
        $card_3_total_all = $card_3_total_access_point + $card_3_total_hardware + $card_3_total_switch;

        $card_4_name = 'Unit Bisnis Gtrans';
        $card_4_total_access_point = $list_access_point->where('nama_lokasi', 'Unit Bisnis Gtrans')->count();
        $card_4_total_hardware = $list_hardware->where('nama_lokasi', 'Unit Bisnis Gtrans')->count();
        $card_4_total_switch = $list_switch->where('nama_lokasi', 'Unit Bisnis Gtrans')->count();
        $card_4_total_all = $card_4_total_access_point + $card_4_total_hardware + $card_4_total_switch;

        $card_5_name = 'Unit Bisnis BES';
        $card_5_total_access_point = $list_access_point->where('nama_lokasi', 'Unit Bisnis BES')->count();
        $card_5_total_hardware = $list_hardware->where('nama_lokasi', 'Unit Bisnis BES')->count();
        $card_5_total_switch = $list_switch->where('nama_lokasi', 'Unit Bisnis BES')->count();
        $card_5_total_all = $card_5_total_access_point + $card_5_total_hardware + $card_5_total_switch;

        // Row 2

        $total_aset_per_month = array();
        for ($i=0; $i < 12; $i++) { 
            $total_aset_per_month[$i] = array(
                'month' => Carbon::now()->subMonths($i)->format('M'),
                'total_access_point' => AccessPoint::whereMonth('created_at', Carbon::now()->subMonths($i)->format('m'))->count(),
                'total_hardware' => Hardware::whereMonth('created_at', Carbon::now()->subMonths($i)->format('m'))->count(),
                'total_switch' => SwitchHub::whereMonth('created_at', Carbon::now()->subMonths($i)->format('m'))->count(),
            );
        }

        // $total_aset_per_month = array();
        // foreach ($list_month as $month) {
        //     $total_aset_per_month[$month] = array(
        //         'access_point' => AccessPoint::whereMonth('created_at', $month)->count(),
        //         'hardware' => Hardware::whereMonth('created_at', $month)->count(),
        //         'switch' => SwitchHub::whereMonth('created_at', $month)->count(),
        //         'month' => Carbon::parse($month)->format('M')
        //     );
        // }

        return view('pages.dashboard.index', [
            'card_1_name' => $card_1_name,
            'card_1_total_access_point' => $card_1_total_access_point,
            'card_1_total_hardware' => $card_1_total_hardware,
            'card_1_total_switch' => $card_1_total_switch,
            'card_1_total_all' => $card_1_total_all,

            'card_2_name' => $card_2_name,
            'card_2_total_access_point' => $card_2_total_access_point,
            'card_2_total_hardware' => $card_2_total_hardware,
            'card_2_total_switch' => $card_2_total_switch,
            'card_2_total_all' => $card_2_total_all,

            'card_3_name' => $card_3_name,
            'card_3_total_access_point' => $card_3_total_access_point,
            'card_3_total_hardware' => $card_3_total_hardware,
            'card_3_total_switch' => $card_3_total_switch,
            'card_3_total_all' => $card_3_total_all,

            'card_4_name' => $card_4_name,
            'card_4_total_access_point' => $card_4_total_access_point,
            'card_4_total_hardware' => $card_4_total_hardware,
            'card_4_total_switch' => $card_4_total_switch,
            'card_4_total_all' => $card_4_total_all,

            'card_5_name' => $card_5_name,
            'card_5_total_access_point' => $card_5_total_access_point,
            'card_5_total_hardware' => $card_5_total_hardware,
            'card_5_total_switch' => $card_5_total_switch,
            'card_5_total_all' => $card_5_total_all,

            'total_aset_per_month' => $total_aset_per_month,
        ]);
    }
}
