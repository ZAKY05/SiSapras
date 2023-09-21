@extends('layouts.master')
@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800">Data Barang</h1> --}}
    <h2> Data Barang</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus-circle"></i>&nbsp;
        Tambah Barang
    </button>
</div>
      <!-- Modal -->
      @include('dashboard.barang.modal.barangModal2')
      @include('dashboard.barang.modal.editModal2')


<div class="card shadow mb-4">
    <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6> --}}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode barang</th>
                        <th>Barang</th>
                        <th>Kategori</th>                     
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
    
                      <tr>
                        <td>{{ $dt->Kode_barang }}</td>
                        <td>{{ $dt->nama_barang}}</td>
                        <td>{{ $dt->kategori }}</td>
                        <td>
                            <a href="/deleteBarang/{{ $dt->id_barang }}" class="btn btn-dark"><i class="fas fa-trash"></i></a>

                            {{-- <button type="button" class="btn btn-warning" data-toggle="modal"
                            data-target="#editmodal2{{ $dt->id_barang }}">
                            <i class="fas fa-user-edit"></i>
                            </button> --}}
                        </td>
                        
                        
                    </tr>  
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection