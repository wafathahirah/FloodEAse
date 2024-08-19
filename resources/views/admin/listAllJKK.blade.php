@extends('admin.layout')
@section('content')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <div class="container-fluid">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Senarai JawatanKuasa Kampung</h1>
                <a data-toggle="modal" data-target="#createPosition"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-sm text-white-50"></i></a>
                @include('admin.createJKK')
            </div>
            @include('components.errorMessage')

            <!-- DataTable -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="listJKK" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kad Pengenalan</th>
                                    <th>Nama</th>
                                    <th>No. Telefon</th>
                                    <th>Emel</th>
                                    <th>Nama Kampung</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Kad Pengenalan</th>
                                    <th>Nama</th>
                                    <th>No. Telefon</th>
                                    <th>Emel</th>
                                    <th>Nama Kampung</th>
                                    <th>Tindakan</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($JKK as $JKK)
                                    <tr>
                                        <td>{{ $JKK->JKKID }}</td>
                                        <td>{{ $JKK->JKKName }}</td>
                                        <td>{{ $JKK->JKKPhoneNum }}</td>
                                        <td>{{ $JKK->JKKEmail }}</td>
                                        <td>{{ $JKK->VillageName }}</td>
                                        <td><a data-toggle="modal" data-target="#editJKK{{ $JKK->JKKID }}"><button
                                                    class="btn btn-success editJKK"><i class="fa fa-pen"
                                                        aria-hidden="true"></i></button></a>
                                            <a href="delete/{{$JKK->JKKID}}" onclick="return confirm ('Adakah anda pasti ingin menghapus jawatankuasa kampung ini?')"><button
                                                    class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button></a>
                                        </td>
                                        </td>
                                        @include('admin.editJKK')
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
