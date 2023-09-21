@extends('layouts.master')
@section('container')
    <h2>Nama Peminjam</h2>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus-circle"></i>&nbsp;
        Tambah Peminjam
    </button>

    @include('dashboard.barang.modal.barangModal')
    @include('dashboard.barang.modal.editModal')
    <div class="card-deck pt-2">  
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama peminjam</th>
                            <th>Kelas</th>
                            <th>Kode barang</th>
                            <th>Barang</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ $data[0]->barang->nama_barang }} --}}

                        @foreach ($data as $dts)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dts->nama_peminjam }}</td>
                                <td>{{ $dts->kelas }}</td>
                                <td>{{ $dts->Kode_barang }}</td>
                                <td>{{ $dts->nama_barang }}</td>
                                <td>{{ $dts->kategori }}</td>
                                <td>{{ $dts->created_at}}</td>

                                <td>

                                    <a href="/deletePeminjaman/{{ $dts->id }}" class="btn btn-dark"><i class="fas fa-trash-alt"></i></a>
                                    {{-- <a href="/tampildata/{{ $dts->id }}" class="btn btn-warning"></a> --}}
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#editmodal{{ $dts->id }}">
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                    <button type="submit" class="btn btn-success" data-toggle="modal"><i class="fas fa-check-circle"></i>
                                    </button>
                                    {{-- <form action="/simpanData/{{ $dts->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success" data-toggle="modal"><i class="fas fa-check-circle"></i>
                                        </button>
                                    </form> --}}
                                    {{-- <form action="/nama-peminjam/delete/{{ $dts->id_peminjam }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark">hapus</button> 
                        </form> --}}
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
