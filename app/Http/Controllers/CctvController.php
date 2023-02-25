<?php

namespace App\Http\Controllers;

use App\Models\Cctv;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function cctv(){
        $data = Cctv::all();
        return view('admin.kategori_barang.CCTV.cctv',[
            'data' =>$data,
        ]);
    }
    public function tambah_cctv(Request $request)
    {
        $data = $this->validate($request,[
            'ip_cctv' => 'required',
            'device_name' => 'required',
            'tipe' => 'required',
            'lokasi' => 'required',
            'username' => 'required',
            'password' => 'required',
            'tgl_pembelian' => 'required',
        ]);
        Cctv::create([
            'ip_cctv' => $data['ip_cctv'],
            'device_name' => $data['device_name'],
            'tipe' => $data['tipe'],
            'lokasi' => $data['lokasi'],
            'username' => $data['username'],
            'password' => $data['password'],
            'tgl_pembelian' => $data['tgl_pembelian'],
        ]);

        return back()->with('success', 'Berhasil Tambah Data');
    }
    public function edit_cctv(Request $request, $id)
    {
        $data = $this->validate($request,[
            'ip_cctv' => 'required',
            'device_name' => 'required',
            'tipe' => 'required',
            'lokasi' => 'required',
            'username' => 'required',
            'password' => 'required',
            'tgl_pembelian' => 'required',
        ]);

        $d = Cctv::FindOrfail($id);
        $d->update($data);

        return
        redirect('/CCTV')->with('success', 'Berhasil Mengedit Data CCTV !');
    }
    public function hapus_cctv($id)
    {
        $d = Cctv::FindOrfail($id);

        $d->delete();
        return
        redirect('/CCTV')->with('success','Berhasil Mendelete Data CCTV !');
    }
}
