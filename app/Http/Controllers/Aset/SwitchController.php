<?php

namespace App\Http\Controllers\Aset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SwitchHub;
use App\Models\Brand;
use App\Models\Lokasi;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class SwitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = SwitchHub::join('brands', 'brands.id', '=', 'switch_hubs.idbrand')
            ->join('lokasis', 'lokasis.id', '=', 'switch_hubs.idlok')
            ->select('switch_hubs.*', 'brands.nama_brand', 'brands.tipe_brand', 'lokasis.nama_lokasi', 'lokasis.unit', 'lokasis.sublokasi')
            ->get();
        $list_brand = Brand::where('jenis_brand', 'Jaringan')->get();
        $list_lokasi = Lokasi::all();
        $list_jenis = ['Management', 'Non Management'];
        $list_jenis_port = ['Fast Ethernet', 'Gigabit Ethernet'];

        return view('pages.aset.switch.index', [
            'items' => $items,
            'list_brand' => $list_brand,
            'list_lokasi' => $list_lokasi,
            'list_jenis' => $list_jenis,
            'list_jenis_port' => $list_jenis_port
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
        $prefix = 'SW/UBINFRA/' . date('Y') . '/';
        $id = IdGenerator::generate(['table' => 'access_points', 'field' => 'id', 'length' => 19, 'prefix' => $prefix]);

        $data = $request->all();
        $data['id'] = $id;

        SwitchHub::create($data);
        return redirect()->route('switch.index')->with('success', 'Data berhasil ditambahkan');
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
        $item = SwitchHub::find($id);
        $item->update($data);
        return redirect()->route('switch.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SwitchHub::find($id);
        $item->delete();
        return redirect()->route('switch.index')->with('success', 'Data berhasil dihapus');
    }
}
