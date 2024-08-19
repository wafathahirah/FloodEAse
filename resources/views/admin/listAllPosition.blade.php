@extends('admin.layout')
@section('content')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Senarai Jawatan</h1>
            <a data-toggle="modal" data-target="#createPosition"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i></a>
                    @include('admin.createPosition')

        </div>
        @include('components.errorMessage')

        <!-- DataTable -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="listPosition" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tugasan</th>
                                <th>Tindakan</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Tugasan</th>
                                <th>Tindakan</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($position as $pos)
                                <tr>
                                    <td>{{ $pos->PosName }}</td>
                                    <td>{{ $pos->PosDesc }}</td>
                                    <td><a data-toggle="modal" data-target="#editPosition{{ $pos->PosID }}"><button
                                                class="btn btn-success editPosition"><i class="fa fa-pen"
                                                    aria-hidden="true"></i></button>                                    @include('admin.editPosition')
                                                </a>
                                        <a data-toggle="modal" data-target="#deletePosition{{ $pos->PosID }}"><button
                                                class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button></a>
                                    </td>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    @include('admin.editPosition')
                                    @include('admin.deletePosition')
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
