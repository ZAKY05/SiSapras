@extends('layouts.master')
@section('container')
    <h2>Daftar Barang dikembalikan</h2>

    <div class="card-deck pt-2">  
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama peminjam</th>
                            <th>Kelas</th>
                            <th>Barang</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ $data[0]->barang->nama_barang }} --}}
                        
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                            
                            </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
