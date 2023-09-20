<?php

namespace App\Models;

use App\Http\Controllers\PeminjamController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $guarded = ['id_barang'];

    public function nama_peminjam(){
        return $this->hasMany(nama_peminjam::class);
    }
}
