@extends('layouts.master')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row container-fluid">
{{-- Card 1 --}}
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Peminjam</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">900</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-3x"></i>
                </div>
            </div>
        </div>
    </div>
  </div>
{{-- Card 1 --}}
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Total Barang</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">2000</div>
                </div>
                <div class="col-auto">
                    {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                    <i class="fas fa-box-open fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Total Barang</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">2000</div>
                </div>
                <div class="col-auto">
                    {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                    <i class="fas fa-box-open fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
  </div>

</div>
@endsection
