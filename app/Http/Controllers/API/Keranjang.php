<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index(){
        return view('keranjang');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'Nama' => 'required',
            'Nomor Telepon' => 'required',
            'Alamat' => 'required',
            'Provinsi' => 'required',
            'Kabupaten/Kota' => 'required',
            'Kelurahan' => 'required',
            'Kode Pos' => 'required',
            'Kode Barang' => 'required',
            'Jumlah Orderan' => 'required',
        ]);

        $nama = $request->file('Nama');

        echo 'File Name: '.$nama->getClientOriginalName();
        echo '<br>';

        echo 'File Extension: '.$nama->getClientOriginalExtension();
        echo '<br>';

        echo 'File Real Path: '.$nama->getRealPath();
        echo '<br>';

        echo 'File Size: '.$nama->getSize();
        echo '<br>';

        echo 'File Mime Type: '.$nama->getMimeType();
        echo '<br>';

        $tujuan_upload = 'data_file';

        $nama->move($tujuan_upload,$nama->getClientOriginalName());
    }
}