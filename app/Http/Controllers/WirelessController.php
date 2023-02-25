<?php

namespace App\Http\Controllers;

use App\Models\Wireless;
use Illuminate\Http\Request;

class WirelessController extends Controller
{
    public function wireless(){
        $data = Wireless::all();
        return view('admin.kategori_barang.WIRELESS.wireless',[
            'data' =>$data,
        ]);
    }
    public function tambah_wireless(Request $request)
    {
        $data = $this->validate($request,[
            'ip_wire' => 'required',
            'device_name' => 'required',
            'tipe' => 'required',
            'lokasi' => 'required',
            'mode' => 'required',
            'merk' => 'required',
            'series' => 'required',
            'tgl_pembelian' => 'required',
        ]);
        Wireless::create([
            'ip_wire' => $data['ip_wire'],
            'device_name' => $data['device_name'],
            'tipe' => $data['tipe'],
            'lokasi' => $data['lokasi'],
            'mode' => $data['mode'],
            'merk' => $data['merk'],
            'series' => $data['series'],
            'tgl_pembelian' => $data['tgl_pembelian'],
        ]);

        return back()->with('success', 'Berhasil Tambah Data');
    }
    public function edit_wireless(Request $request, $id)
    {
        $data = $this->validate($request,[
            'ip_wire' => 'required',
            'device_name' => 'required',
            'tipe' => 'required',
            'lokasi' => 'required',
            'mode' => 'required',
            'merk' => 'required',
            'series' => 'required',
            'tgl_pembelian' => 'required',
        ]);

        $d = Wireless::FindOrfail($id);
        $d->update($data);

        return
        redirect('/WIRELESS')->with('success', 'Berhasil Mengedit Data Wireless !');
    }
    public function hapus_wireless($id)
    {
        $d = Wireless::FindOrfail($id);

        $d->delete();
        return
        redirect('/WIRELESS')->with('success','Berhasil Mendelete Data Wireless !');
    }
}

