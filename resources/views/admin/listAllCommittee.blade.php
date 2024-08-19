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
            <h1 class="h3 mb-0 text-gray-800">Senarai Ahli Jawatan Kuasa Misi</h1>
            <a data-toggle="modal" data-target="#createCommittee"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i></a>
                    @include('admin.createCommittee')
        </div>
        @include('components.errorMessage')

        <!-- DataTable -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="listCommittee" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jawatan</th>
                                <th>Tugasan</th>
                                <th>Ketua</th>
                                <th>Tarikh lantikan</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Jawatan</th>
                                <th>Tugasan</th>
                                <th>Ketua</th>
                                <th>Tarikh lantikan</th>
                                <th>Tindakan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($committee as $committee)
                                <tr>
                                    <td>{{ $committee->staff->SName }}</td>
                                    <td>{{ $committee->position->PosName }}</td>
                                    <td>{{ $committee->ComTask }}</td>
                                    <td>{{ $committee->ComLeader }}</td>
                                    <td>{{ $committee->ComDate }}</td>
                                    <td>
                                        
                                        <a href="#" data-toggle="modal" data-target="#editCommittee{{ $committee->ComID}}"><button
                                                class="btn btn-success editCommittee"><i class="fa fa-pen" aria-hidden="true"></i></button></a>
                                                <a href="delete/{{$committee->ComID}}" onclick="return confirm ('Adakah anda pasti ingin menghapus ahli jawatankuasa ini ini?')" data-tooltip="tooltip" data-html="true" data-placement="right"><button
                                                    class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button></a>

                                        
                                    </td>
                                    @include('admin.editCommittee')

                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

                @endsection
