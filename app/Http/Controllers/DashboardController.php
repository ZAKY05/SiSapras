<?php

namespace App\Http\Controllers;

use App\Models\nama_peminjam;
use App\Models\product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
   public function index(){

        

        $peminjam =nama_peminjam::count();

        return view('dashboard.main',['nama_peminjam']);
        
    }
}
