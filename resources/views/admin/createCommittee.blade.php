 <!-- Modal: Add-->
 <div class="modal fade" id="createCommittee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Tambah AJK</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">
             <form method="POST" action="{{ route('committee.store') }}">
                 @csrf

                 <div class="mb-3">
                     <label for="name" class="form-label">Nama Pekerja</label>
                     <select id="SID" name="SID" class="form-control" required>
                         <option value="" disabled selected>Sila Pilih </option>

                         @foreach ($staff as $staffs)
                             <option  required value="{{ sprintf('%012d',$staffs->SID )}}">{{ $staffs->SName }}</option>
                         @endforeach
                     </select>
                 </div>
                 <div class="mb-3">
                     <label for="PosID">Jawatan :</label>
                     <select id="PosID" name="PosID" class="form-control" required>
                         <option required value="" disabled selected>Sila Pilih </option>
                         @foreach ($position as $positions)
                             <option value="{{ $positions->PosID }}">{{ $positions->PosName }}</option>
                         @endforeach
                     </select>
                 </div>

                 <div class="mb-3">
                     <label for="ComTask" class="form-label">Tugasan</label>
                     <input required type="text" class="form-control" id="ComTask" name="ComTask"
                         oninput="this.value = this.value.toUpperCase()">
                 </div>

                 <div class="mb-3">
                     <label for="ComLeader">Ketua:</label>
                     <select id="ComLeader" name="ComLeader" class="form-control" required>
                         <option required value="" disabled selected>Sila Pilih </option>
                         @foreach ($staff as $staff)
                             <option value="{{ $staff->SName }}">{{ $staff->SName }}</option>
                         @endforeach
                     </select>
                 </div>
                 <div class="mb-3">
                     <label for="ComDate">Tarikh Lantikan:</label>
                     <input required type="date" id="ComDate" name="ComDate" class="form-control" required>
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