<?php

namespace App\Http\Controllers\Aset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hardware;
use App\Models\Brand;
use App\Models\Lokasi;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Hardware::with('brand', 'lokasi')->get();
        
        $list_brand = Brand::where('jenis_brand', 'Hardware')->get();
        $list_lokasi = Lokasi::all();
        $list_jenis = ['Printer', 'Scanner', 'Mesin Fotocopy'];

        return view('pages.aset.hardware.index', [
            'items' => $items,
            'list_brand' => $list_brand,
            'list_lokasi' => $list_lokasi,
            'list_jenis' => $list_jenis
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
        $idgenerator = IdGenerator::generate(['table' => 'hardware', 'field' => 'idhardware', 'length' => 6, 'prefix' => 'HW-']);
        $idhardware = $idgenerator . "/" . "UBINFRA" . "/" . date('Y');

        $data = $request->all();
        $data['idhardware'] = $idhardware;

        if($data['ipaddress'] == '' && $data['computer_name'] == ''){
            return redirect()->back()->with('error', 'IP Address atau Computer Name harus diisi');
        }

        Hardware::create($data);
        return redirect()->route('hardware.index')->with('success', 'Data berhasil ditambahkan');
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
        $item = Hardware::find($id);
        $item->update($data);
        return redirect()->route('hardware.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hardware::find($id);
        $item->delete();
        return redirect()->route('hardware.index')->with('success', 'Data berhasil dihapus');
    }
}
