@extends('admin.layout')
@section('content')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

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
            <h1 class="h3 mb-0 text-gray-800">Senarai Kakitangan</h1>
            <a data-toggle="modal" data-target="#createStaff"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i></a>
                    @include('admin.createStaff')
        </div>
        @include('components.errorMessage')


        <!-- DataTable -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="listStaff" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Telefon</th>
                                <th>Email</th>
                                <th>Peranan</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Telefon</th>
                                <th>Email</th>
                                <th>Peranan</th>
                                <th>Tindakan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($staff as $staff)
                                <tr>
                                    <td>{{ $staff->SName }}</td>
                                    <td>{{ $staff->SAddress }}</td>
                                    <td>{{ $staff->SPhoneNum }}</td>
                                    <td>{{ $staff->SEmail }}</td>
                                    <td>{{ $staff->SRole }}</td>

                                    <td>
                                        <a data-toggle="modal" data-target="#editStaff{{$staff->SID}}"><button
                                            class="btn btn-success editStaff"><i class="fa fa-pen"
                                                aria-hidden="true"></i></button></a> 
                                        <a href="delete/{{$staff->SID}}" onclick="return confirm ('Adakah anda pasti ingin menghapus kakitangan ini?')" data-tooltip="tooltip" data-html="true" data-placement="right"><button
                                                class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button></a>

                                    </td>
                                    @include('admin.editStaff')

                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
@endsection
