 <!-- Modal: Edit-->
 <div class="modal fade" id="editCommittee{{ $committee->ComID }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Kemaskini Kakitangan</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="{{ route('committee.update', $committee->ComID) }}" id="editCommittee">
                     @csrf


                     <div class="mb-3">
                         <label>Nama Pekerja</label><br>
                         <input type="text" readonly value="{{ optional($committee->staff)->SName }}"
                             class="form-control"><br>
                     </div>

                     <div class="mb-3">
                         <label for="PosID">Jawatan:</label>
                         <select name="PosID" class="form-control" required>
                             @foreach ($position as $pos)
                                 <option value="{{ $pos->PosID }}" @if ($pos->PosID == $committee->PosID) selected @endif>
                                     {{ $pos->PosName }}</option>
                             @endforeach
                         </select>
                     </div>

                     <div class="mb-3">

                         <label>Tugasan</label><br>
                         <input type="text" name="ComTask" value="{{ $committee->ComTask }}" class="form-control"
                             required oninput="this.value = this.value.toUpperCase()"><br>

                     </div>

                     <div class="mb-3">
                         <label for="ComLeader">Ketua:</label>
                         <select id="ComLeader" name="ComLeader" class="form-control" required>
                             @foreach ($staff as $staff)
                                 @if ($staff->SName !== Auth::user()->name)
                                     <!-- Assuming you are using Laravel's Auth -->
                                     <option value="{{ $staff->SName }}" @if( $staff->SName == $committee->ComLeader) selected @endif>{{ $staff->SName }}</option>
                             @endif
                                     @endforeach
                         </select>
                     </div>
                     <div class="mb-3">

                         <label>Tarikh Lantikan</label><br>
                         <input type="date" name="ComDate" value="{{ $committee->ComDate }}" class="form-control"
                             required><br>
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
     $(.listCommittee).DataTable();

     $(document).on('click', '.editCommittee', function() {
         var_this = $(this).parents('tr');
         $('#SID').val(_this.find('.SID').text());
         $('#PosID').val(_this.find('.PosID').text());
         $('#ComTask').val(_this.find('.ComTask').text());
         $('#ComLeader').val(_this.find('.ComLeader').text());
         $('#ComDate').val(_this.find('.ComDate').text());
         $('#ComID').val(_this.find('.ComID').text());

     });
 </script>
