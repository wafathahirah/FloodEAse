<!-- Modal: Edit-->
<div class="modal fade" id="editJKK{{$JKK->JKKID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kemaskini JawatanKuasa Kampung</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('update.jkk', $JKK->JKKID)}}" id="editJKK">
                    @csrf
                    <div class="mb-3">
                     <label for="SID" class="form-label">No. Kad Pengenalan (tanpa tanda -)</label>
                     <input type="text" required class="form-control" id="JKKID" name="JKKID" value="{{$JKK->JKKID}}">
                 </div>
                 <div class="mb-3">
                     <label for="name" class="form-label">Nama</label>
                     <input type="text" required class="form-control" id="JKKName" name="JKKName"
                         oninput="this.value = this.value.toUpperCase()" value="{{$JKK->JKKName}}">
                 </div>
 
                 <div class="mb-3">
                     <label for="number" class="form-label">Nombor Telefon (tanpa tanda -)</label>
                     <input type="text" required inputmode="numeric" pattern="[0-9]*" class="form-control no-arrow"
                         id="JKKPhoneNum" name="JKKPhoneNum" value="{{$JKK->JKKPhoneNum}}">
                 </div>

                 <div class="mb-3">
                    <label for="name" class="form-label">Emel</label>
                    <input type="text" required class="form-control" id="JKKEmail" name="JKKEmail" value="{{$JKK->JKKEmail}}">
                </div>
 
                 <div class="mb-3">
                     <label for="address" class="form-label">Nama Kampung</label>
                     <input type="text" required class="form-control" id="VillageName" name="VillageName"
                         oninput="this.value = this.value.toUpperCase()" value="{{$JKK->VillageName}}">
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
 $('.listJKK').DataTable();

 $(document).on('click', '.editJKK', function(){
    var_this = $(this).parents('tr');

    $('#JKKID').val(_this.find('.JKKID').text());
    $('#JKKName').val(_this.find('.JKKName').text());
    $('#JKKPhoneNum').val(_this.find('.JKKPhoneNum').text());
    $('#JKKEmail').val(_this.find('.JKKEmail').text());
    $('#VillageName').val(_this.find('.VillageName').text());
 });

 </script>

 