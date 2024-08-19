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
            <h1 class="h3 mb-0 text-gray-800">Inventori</h1>
            <a data-toggle="modal" data-target="#createAid"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i></a>
                    @include('admin.createAid')

        </div>
        @include('components.errorMessage')

        <!-- DataTable -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="listAid" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Item</th>
                                <th>Jumlah</th> {{-- Total item, user key in.. total package guna query --}}
                                <th>Pakej</th>
                                <th>Masa/tarikh kemaskini</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Item</th>
                                <th>Jumlah</th> {{-- Total item, user key in.. total package guna query --}}
                                <th>Pakej</th>
                                <th>Masa/tarikh kemaskini</th>
                                <th>Tindakan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($aid as $aid)
                                <tr>
                                    <td>{{ $aid->ItemName }}</td>
                                    <td>{{ $aid->TotalAid }}</td>
                                    <td>{{ $aid->AidType }}</td>
                                    <td>{{ $aid->updated_at->format('d-m-Y H:i:s') }}</td>

                                    <td>

                                            <a data-toggle="modal" data-target="#editAid{{ $aid->AidID }}"><button
                                                    class="btn btn-success editAid"><i class="fa fa-pen"
                                                        aria-hidden="true"></i></button></a>@include('admin.editAid')

                                                        <a href="adminn/delete/{{$aid->AidID}}" onclick="return confirm ('Adakah anda pasti ingin menghapus barang ini?')" data-tooltip="tooltip" data-html="true" data-placement="right"><button
                                                            class="btn btn-danger"><i class="fa fa-trash"
                                                                aria-hidden="true"></i></button></a>
                                      
                                    </td>

                                    <td></td>
                                    @include('admin.editAid')
                                </tr>

                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
