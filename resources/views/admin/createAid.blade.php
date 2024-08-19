 <!-- Modal: Add-->
 <div class="modal fade" id="createAid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">
             <form method="POST" action="{{ route('aid.store') }}">
                 @csrf
                 <div class="mb-3">
                     <label for="ItemName" class="form-label">Nama barang</label>
                     <input type="text" required class="form-control" id="ItemName" name="ItemName"
                         oninput="this.value = this.value.toUpperCase()">
                 </div>

                 <div class="mb-3">
                     <label for="TotalAid" class="form-label">Jumlah Barang</label>
                     <input type="number" required class="form-control" id="TotalAid" name="TotalAid">
                 </div>

                 <div class="mb-3">
                     <label for="AidType" class="form-label">Pakej</label>
                     <select class="form-control" required id="AidType" name="AidType">
                         <option value="" disabled selected>Sila Pilih </option>
                         <option value="Set Lelaki">Set Lelaki</option>
                         <option value="Set Perempuan">Set Perempuan</option>
                         <option value="Set Bayi">Set Bayi</option>
                         <option value="Makanan Sahaja">Makanan Sahaja</option>
                         <option value="Selesai">Selesai</option>


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