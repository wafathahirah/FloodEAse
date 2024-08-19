@extends('jkk.layout')
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
            <a data-toggle="modal" data-target="#createRes"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i></a>
        </div>
        @include('components.errorMessage')

        <!-- DataTable -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="listResi" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Kad Pengenalan</th>
                                <th>Nama</th>
                                <th>Kondisi Rumah</th>
                                <th>Alamat</th>
                                <th>Tindakan</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No Kad Pengenalan</th>
                                <th>Nama</th>
                                <th>Kondisi Rumah</th>
                                <th>Alamat</th>
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
                                    <td>{{ $resident->ResStreet }}</td>
                                    <td><a href="#" data-toggle="modal" data-target="#Resi{{ $resident->ResID }}"><button
                                                class="btn btn-success editResi"><i class="fa fa-pen"
                                                    aria-hidden="true"></i></button></a>
                                        <a href="#" data-toggle="modal" data-target="#deleteResi{{ $resident->ResID }}"><button
                                                class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button></a>
                                        <a data-toggle="modal" data-target="#viewRess{{ $resident->ResID }}"><button
                                                class="btn btn-info"><i class="fa fa-eye"
                                                    aria-hidden="true"></i></button></a>
                                    </td>
                                    @include('jkk.editResident')
                                    <td></td>
                                    @include('jkk.deleteResident')
                                </tr>
                                @include('jkk.viewResident')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Add-->
    <div class="modal fade" id="createRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Penduduk</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('resident.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="ResID" class="form-label">No. Kad Pengenalan (tanpa tanda -)</label>
                            <input type="text" class="form-control" id="ResID" name="ResID">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="ResName" name="ResName"
                                oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tanggungan</label>
                            <input type="text" class="form-control" id="ResDependencies" name="ResDependencies"
                                oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tempat</label>
                            <select name="ResStreet" class="form-control" required>
                                @foreach ($JKK->unique('VillageName') as $jkk)
                                    <option value="{{ $jkk->VillageName }}">{{ $jkk->VillageName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Keadaan Rumah</label>
                            <select class="form-control" id="HouseCondition" name="HouseCondition">
                                <option value="" disabled selected>Sila Pilih </option>
                                <option value="Lumpur Penuh">Lumpur Penuh</option>
                                <option value="Lumpur Sedikit">Lumpur Sedikit</option>
                            </select>

                            <div class="mb-3">
                                <label for="name" class="form-label">Bantuan Lepas</label>
                                <input type="text" class="form-control" id="ResPastAid" name="ResPastAid"
                                    oninput="this.value = this.value.toUpperCase()">
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal: Add-->

                    <script>
                        document.getElementById("PosName").addEventListener("input", function() {
                            this.value = this.value.toUpperCase();
                        });
                    </script>
                @endsection
