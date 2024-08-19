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
            <h1 class="h3 mb-0 text-gray-800">Senarai Status Bantuan</h1>
            <div>
                <a data-toggle="modal" data-target="#createAidRes"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i>
                </a>
                <a class="btn btn-sm btn-danger shadow-sm"  data-toggle="modal"
                    data-target="#deleteAllRecords">
                    <i class="fas fa-trash fa-sm text-white-50"></i>
                </a>
                @include('admin.deleteAidRes')
            </div>
        </div>
        @include('components.errorMessage')

         <!-- DataTable -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="listAidRes" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kumpulan</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Pakej Bantuan</th>
                            <th>Jumlah Bantuan</th>
                            <th>Masa/tarikh</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kumpulan</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Pakej Bantuan</th>
                            <th>Jumlah Bantuan</th>
                            <th>Masa/tarikh</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($aid_res as $committee)
                        <tr>
                            <td> @if($committee->committee)
                                @if($committee->committee->staff)
                                    {{ $committee->committee->staff->SName }}
                                @else
                                    Staff Not Found
                                @endif
                            @else
                                Committee Not Found
                            @endif</td>
                            <td>{{ $committee->resident->ResStreet }}</td>
                            <td>{{ $committee->aid_resStatus }}</td>
                            <td>{{ $committee->aid->AidType}}</td>
                            <td>{{ $committee->aid_resQuantity}}</td>
                            <td>{{ $committee->created_at->format('d-m-Y H:i:s')}}</td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    <!-- Modal: Add -->
    <div class="modal fade" id="createAidRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Status Bantuan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('aid_res.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="ComID">Nama Ketua Kumpulan:</label>
                            <select name="ComID" id="ComID" class="form-control" required>
                                    @foreach ($staff as $staff)
                                        <option value="{{ sprintf('%012d', $staff->SID) }}">{{ $staff->SName }}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ResID">Lokasi :</label>
                            <select name="ResID" class="form-control" required>
                                @foreach ($resident->unique('ResStreet') as $res)
                                    <option value="{{ $res->ResID }}">{{ $res->ResStreet }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="AidID">Pakej Bantuan:</label>
                            <select name="AidID" class="form-control" required>
                                @foreach ($aid->unique('AidType') as $uniqueAid)
                                    <option value="{{ $uniqueAid->AidID }}">{{ $uniqueAid->AidType }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="aid_resQuantity">Jumlah Bantuan:</label>
                            <input type="text" name="aid_resQuantity" class="form-control" required>

                        </div>

                        <div class="form-group">
                            <label for="aid_resStatus">Status Bantuan:</label>
                            <select name="aid_resStatus" class="form-control" required>
                                <option value="" disabled selected>Sila Pilih</option>
                                <option value="Lebih">Lebih</option>
                                <option value="Kurang">Kurang</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Mula">Mula</option>

                            </select>
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
