<?php

namespace App\Http\Controllers;

use App\Models\Umpc;
use Illuminate\Http\Request;

class UmpcController extends Controller
{
    public function umpc(){
        $data = Umpc::all();
        return view('admin.kategori_barang.UMPC.umpc',[
            'data' =>$data,
        ]);
    }
    public function tambah_umpc(Request $request)
    {
        $data = $this->validate($request,[
            'sn_umpc' => 'required',
            'unit' => 'required',
            'tgl_pembelian' => 'required',
        ]);
        Umpc::create([
            'sn_umpc' => $data['sn_umpc'],
            'unit' => $data['unit'],
            'tgl_pembelian' => $data['tgl_pembelian'],
        ]);

        return back()->with('success', 'Berhasil Tambah Data');
    }
    public function edit_umpc(Request $request, $id)
    {
        $data = $this->validate($request,[
            'sn_umpc' => 'required',
            'unit' => 'required',
            'tgl_pembelian' => 'required',
        ]);

        $d = Umpc::FindOrfail($id);
        $d->update($data);

        return
        redirect('/UMPC')->with('success', 'Berhasil Mengedit Data UMPC !');
    }
    public function hapus_umpc($id)
    {
        $d = Umpc::FindOrfail($id);


        $d->delete();
        return
        redirect('/UMPC')->with('success','Berhasil Mendelete Data UMPC !');
    }
}
