<?php

namespace App\Http\Controllers;

use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    public function wifi(){
        $data = Wifi::all();
        return view('admin.kategori_barang.WIFI.wifi',[
            'data' =>$data,
        ]);
    }
    public function tambah_wifi(Request $request)
    {
        $data = $this->validate($request,[
            'ip_wifi' => 'required',
            'device_name' => 'required',
            'tipe' => 'required',
            'lokasi' => 'required',
            'mode' => 'required',
            'merk' => 'required',
            'series' => 'required',
            'tgl_pembelian' => 'required',
        ]);
        Wifi::create([
            'ip_wifi' => $data['ip_wifi'],
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
    public function edit_wifi(Request $request, $id)
    {
        $data = $this->validate($request,[
            'ip_wifi' => 'required',
            'device_name' => 'required',
            'tipe' => 'required',
            'lokasi' => 'required',
            'mode' => 'required',
            'merk' => 'required',
            'series' => 'required',
            'tgl_pembelian' => 'required',
        ]);

        $d = Wifi::FindOrfail($id);
        $d->update($data);

        return
        redirect('/WIFI')->with('success', 'Berhasil Mengedit Data Wifi !');
    }
    public function hapus_wifi($id)
    {
        $d = Wifi::FindOrfail($id);

        $d->delete();
        return
        redirect('/WIFI')->with('success','Berhasil Mendelete Data Wifi !');
    }
}

