@extends('admin.layout')
@section('content')
<link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laman Utama</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-m font-weight-bold text-primary text-uppercase mb-1">
                                    MANGSA BANJIR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">    {{$residentCounts}}
                                  </div> 
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-m font-weight-bold text-success text-uppercase mb-1">
                                    WAKIL TEMPAT</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jkkc}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-m font-weight-bold text-info text-uppercase mb-1">barang bantuan
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$aidc}}</div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-gift fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-m font-weight-bold text-warning text-uppercase mb-1">
                                    ahli jawatankuasa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$comc}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-address-card fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endSection
