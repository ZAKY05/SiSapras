<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoriController extends Controller
{
    public function index(){
    return view('dashboard.barang.histori');

    }
    public function simpandata($id)
    {
       // dd($id);
        $data = DB::table('nama_peminjam')->where('id', $id)
        ->join('barang', 'nama_peminjam.id_barang', 'barang.id_barang')
        ->get();
        dd($data);
    //    $deleteuser = DB::table('nama_peminjam')->where('id', $id)->delete();
       // if ($deleteuser){
       //    return redirect('/nama-peminjam');
       // }
       return redirect('/nama-peminjam');
    }
}
