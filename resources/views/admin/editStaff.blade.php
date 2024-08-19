<div class="modal fade" id="editStaff{{$staff->SID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kemaskini Kakitangan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
     
        <div class="modal-body">
            <form method="POST" action="{{route('staff.update', $staff->SID)}}" id="editStaff">
                @csrf

                <div class="mb-3">
                    <label for="SID" class="form-label">No. Kad Pengenalan (tanpa tanda -)</label>
                    <input type="text" class="form-control" id="SID" name="SID"
                        value="{{ $staff->SID }}" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="SName" name="SName"
                        value="{{ $staff->SName }}" oninput="this.value = this.value.toUpperCase()" required>
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">Nombor Telefon (tanpa tanda -)</label>
                    <input type="text" inputmode="numeric" pattern="[0-9]*" class="form-control no-arrow"
                        id="SPhoneNum" name="SPhoneNum" value="{{ $staff->SPhoneNum }}" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="SAddress" name="SAddress"
                        oninput="this.value = this.value.toUpperCase()" value="{{ $staff->SAddress }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Emel</label>
                    <input type="email" class="form-control" id="SEmail" name="SEmail"
                        value="{{ $staff->SEmail }}" required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Peranan</label>
                    <select class="form-control" id="SRole" name="SRole" required>
                        <option value="staff" {{ $staff->SRole == 'normal' ? 'selected' : '' }}>Normal</option>
                        <option value="admin" {{ $staff->SRole == 'admin' ? 'selected' : '' }}>Admin</option>
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
<!--  End Modal: Edit-->
<script>
    $('.listStaff').DataTable();

$(document).on('click', '.editStaff', function(){
   var_this = $(this).parents('tr');

   $('#SID').val(_this.find('.SID').text());
   $('#SName').val(_this.find('.SName').text());
   $('#SPhoneNum').val(_this.find('.SPhoneNum').text());
   $('#SEmail').val(_this.find('.SEmail').text());
   $('#SRole').val(_this.find('.SRole').text());
});
</script>