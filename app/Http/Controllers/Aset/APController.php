<?php

namespace App\Http\Controllers\Aset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccessPoint;
use App\Models\Brand;
use App\Models\Lokasi;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class APController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = AccessPoint::with('brand', 'lokasi')->get();

        $list_brand = Brand::where('jenis_brand', 'Jaringan')->get();
        $list_lokasi = Lokasi::all();
        $list_jenis = ['Management', 'Non Management'];
        $list_frekuensi = ['2.4 GHz', '5 GHz', '2.4 GHz dan 5 GHz'];

        return view('pages.aset.ap.index', [
            'items' => $items,
            'list_brand' => $list_brand,
            'list_lokasi' => $list_lokasi,
            'list_jenis' => $list_jenis,
            'list_frekuensi' => $list_frekuensi
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
        $id = IdGenerator::generate(['table' => 'access_points', 'field' => 'idap', 'length' => 6, 'prefix' => 'AP-']);
        $idap = $id . '/' . 'UBINFRA/' . date('Y');
        
        $data = $request->all();
        $data['idap'] = $idap;

        AccessPoint::create($data);
        return redirect()->route('ap.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $item = AccessPoint::find($id);
        $item->update($data);
        return redirect()->route('ap.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AccessPoint::find($id);
        $item->delete();
        return redirect()->route('ap.index')->with('success', 'Data berhasil dihapus');
    }
}
