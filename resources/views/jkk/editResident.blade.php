<!-- Modal: Edit-->
<div class="modal fade" id="Resi{{ $resident->ResID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kemaskini Penduduk </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('update.resident' , $resident->ResID)}}" id="editResi">
                    @csrf
                    <div class="mb-3">
                        <label for="ResID" class="form-label">No. Kad Pengenalan (tanpa tanda -)</label>
                        <input type="text" required class="form-control" id="ResID" name="ResID" value="{{ $resident->ResID }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" required class="form-control" id="ResName" name="ResName"
                            oninput="this.value = this.value.toUpperCase()" value="{{ $resident->ResName }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tanggungan</label>
                        <input type="text" required class="form-control" id="ResDependencies" name="ResDependencies"
                            oninput="this.value = this.value.toUpperCase()" value="{{ $resident->ResDependencies }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Jalan</label>
                        <input type="text" required class="form-control" id="ResCity" name="ResCity"
                            oninput="this.value = this.value.toUpperCase()" value="{{ $resident->ResCity}}">
                    </div>


                    <div class="mb-3">
                        <label for="role" class="form-label">Keadaan Rumah</label>
                        <select required class="form-control" id="HouseCondition" name="HouseCondition">
                            @foreach(['Lumpur Penuh', 'Lumpur Sedikit'] as $option)
                            <option value="{{ $option }}" @if($option == $resident->HouseCondition) selected @endif>{{ $option }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Bantuan Lepas</label>
                        <input type="text" required class="form-control" id="ResPastAid" name="ResPastAid"
                            oninput="this.value = this.value.toUpperCase()" value="{{ $resident->ResPastAid}}">
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
<script>
    $('.listResi').DataTable();

    $(document).on('click', '.editResi', function(){
        var_this = $(this).parents('tr');

        $('#ResID').val(_this.find('.ResID').text());
        $('#ResName').val(_this.find('.ResName').text());
        $('#ResDependencies').val(_this.find('.ResDependencies').text());
        $('#HouseCondition').val(_this.find('.HouseCondition').text());
        $('#ResCity').val(_this.find('.ResCity').text());
    });
</script>