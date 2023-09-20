<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Support\Facades\DB;
use App\Models\nama_peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    public function index(){
        // $products = product::select('*')->get();
        $data = barang::all();
        return view('dashboard.barang.daftarBarang', compact('data'));
    }

    public function delete($id){
        $deleteuser = DB::table('barang')->where('id_barang', $id)->delete();
        return redirect('/daftar-barang');

    }

    public function store2(Request $request){
        // dd($request);
        $id_barang= DB::table("barang")->insertGetId([
         'nama_barang' => $request->nama_barang,
         'kategori' => $request->kategori,
        //  'Kode_barang'=> Str::random(7),
         'Kode_barang'=>$randomId = rand(0,99999),
        ]);
        return redirect('daftar-barang');
    }

    public function tampildata2($id){

        $data = barang::find($id);
        // dd($data);
  
        return view('dashboard.barang.modal.editModal', compact('data'));
  
     }

    // public function updatedata2(Request $request, $id_barang){
    //     $data = barang::find($id_barang);
    //     $data->update($request->all()); 
    //     // dd($id);
    //     // return redirect()->route('nama-peminjam')->with('susces','data berhasil di update');
    //     return redirect()->back();
  
    //  }

    public function updatedata2(Request $request, $id_barang){
        $data = barang::where('id_barang', $id_barang)->get();
        $data->update($request->all());
        return redirect()->back();
    }
}
