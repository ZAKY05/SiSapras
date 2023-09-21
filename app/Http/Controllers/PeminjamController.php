<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\nama_peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PeminjamController extends Controller
{
   public function index()
   {


      $data = DB::table('nama_peminjam')
      ->join('barang', 'nama_peminjam.id_barang', 'barang.id_barang')
      ->get();
      /* SELECT * FROM nama_peminjam JOIN barang ON barang.id_barang = nama_peminjam.id_barang */
      $barang = DB::table('barang')->get();

      // dd($data);
      //  return view('dashboard.barang.nama_peminjam',compact('data'));
      // $data = nama_peminjam::with('barang')->get();
      // $data = nama_peminjam::all();
      // dd($data[0]->barang->nama_barang);
      return view('dashboard.barang.nama_peminjam', compact(['data','barang']));
   }


   public function delete($id)
   {
      // dd($id);
      $deleteuser = DB::table('nama_peminjam')->where('id', $id)->delete();
      // if ($deleteuser){
      //    return redirect('/nama-peminjam');
      // }
      return redirect('/nama-peminjam');
   }


   public function insert()
   {
   }
   // public function insert(){
   //    $data =request()->validate([
   //       'nama_peminjam'=> 'required',
   //       'kelas'=>'required'
   //    ]);

   //    nama_peminjam::created($data);
   //    return redirect('/daftar-barang');



   // }
   // public function insert(Request $request){
   //    dd($request->all());
   //    nama_peminjam::create($request->all());
   //     return redirect()->route('daftar_barang');

   // }

   public function store(Request $request)
   {
      // dd($request->all());
      // $barang = barang::create([
      //    'nama_barang' => $request->barang,
      //    'kategori' => $request->kategori,
      // ]);

      


      DB::table("nama_peminjam")
         ->insert([
            'nama_peminjam' => $request->nama_peminjam,
            'kelas' => $request->kelas,
            'id_barang' => $request->id_barang,
         ]);

      return redirect()->back();
   }


   public function tampildata($id){

      $data = nama_peminjam::find($id);
      // dd($data);

      return view('dashboard.barang.modal.editModal', compact('data'));

   }

   public function updatedata(Request $request, $id){
      $data = nama_peminjam::find($id);
      $data->update($request->all()); 
      // return redirect()->route('nama-peminjam')->with('susces','data berhasil di update');
      return redirect()->back();

   }
}
