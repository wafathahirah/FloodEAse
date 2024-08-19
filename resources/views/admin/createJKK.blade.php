 <!-- Modal: Add-->
 <div class="modal fade" id="createPosition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Tambah JawatanKuasa Kampung</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">
             <form method="POST" action="{{ route('jkk.store') }}">
                 @csrf

                 <div class="mb-3">
                     <label for="ID" class="form-label">No. Kad Pengenalan (tanpa tanda -)</label>
                     <input type="text" required class="form-control" id="JKKID" name="JKKID">
                 </div>
                 <div class="mb-3">
                     <label for="name" class="form-label">Nama</label>
                     <input type="text"  required class="form-control" id="JKKName" name="JKKName"
                         oninput="this.value = this.value.toUpperCase()">
                 </div>

                 <div class="mb-3">
                     <label for="number" class="form-label">Nombor Telefon (tanpa tanda -)</label>
                     <input type="text" class="form-control" id="JKKPhoneNum" name="JKKPhoneNum" required>
                 </div>

                 <div class="mb-3">
                     <label for="email" class="form-label">Emel</label>
                     <input type="email" class="form-control" id="JKKEmail" name="JKKEmail" required>
                 </div>

                 <div class="mb-3">
                     <label for="text" class="form-label">Nama Kampung</label>
                     <input type="text" required class="form-control" id="VillageName" name="VillageName"
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