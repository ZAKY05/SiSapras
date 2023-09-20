@extends('layouts.master')
@section('container')
    <h2>KATEGORI</h2>
    <button class="btn btn-primary" href="/add">Tambah</button>
<div class="card-deck pt-2">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
              
                  
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
