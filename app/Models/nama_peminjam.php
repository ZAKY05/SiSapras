<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nama_peminjam extends Model
{
    use HasFactory;

    protected  $table = 'nama_peminjam';
    // protected  $primaryKey ='id';
    protected $dates = ['created_at'];

    protected $guarded =['id'];
    public function barang(){
        return $this->belongsTo(barang::class, 'id_barang');
    }
}
