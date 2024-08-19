 <!-- Modal: Edit-->
 <div class="modal fade" id="editPosition{{ $pos->PosID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Kemaskini Jawatan</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">
             <form method="POST" action="{{route('position.update', $pos->PosID)}}" id="editPosition">
                 @csrf
                 <div class="mb-3">
                     <label for="name" class="form-label">Nama Jawatan</label>
                     <input type="text" class="form-control" required id="PosName" name="PosName"
                         oninput="this.value = this.value.toUpperCase()" value="{{ $pos->PosName }}">
                 </div>

                 <div class="mb-3">
                     <label for="PosDesc" class="form-label">Tugasan</label>
                     <input type="text" class="form-control"required id="PosDesc" name="PosDesc" oninput="this.value = this.value.toUpperCase()" value="{{ $pos->PosDesc }}">
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
$('.listPosition').DataTable();

$(document).on('click', '.editPosition', function() {
    var_this = $(this).parents('tr');

    $('#PosName').val(_this.find('.PosName').text());
    $('#PosDesc').val(_this.find('.PosDesc').text());

})
</script>