@extends('admin.layout')
@section('content')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Senarai Penduduk</h1>
        </div>
        @include('components.errorMessage')

        <!-- DataTable -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="listRes" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kad Pengenalan</th>
                                <th>Nama</th>
                                <th>Kondisi Rumah</th>
                                <th>Masa/Tarikh</th>
                                <th>Tindakan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kad Pengenalan</th>
                                <th>Nama</th>
                                <th>Kondisi Rumah</th>
                                <th>Masa/Tarikh</th>
                                <th>Tindakan</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($resident as $resident)
                                <tr>
                                    <td>{{ $resident->ResID }}</td>
                                    <td>{{ $resident->ResName }}</td>
                                    <td>{{ $resident->HouseCondition }}</td>
                                    <td>{{ $resident->updated_at->format('d-m-Y H:i:s') }}</td>
                                    <td><a data-toggle="modal" data-target="#deleteRes{{$resident->ResID}}"><button
                                        class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                        <a  data-toggle="modal" data-target="#viewRes{{$resident->ResID}}"><button
                                            class="btn btn-info"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button></a>
                            </td>
                            @include('admin.deleteResident')
                        <td></td>
                                    
                        @include('admin.viewResident')

                                    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                                    @endsection
