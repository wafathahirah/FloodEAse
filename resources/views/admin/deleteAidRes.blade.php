  <!-- Modal: Delete-->
  <div class="modal fade" id="deleteAllRecords" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Semua Rekod</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form method="POST" action="{{ route('delete.aid_res') }}">
              @csrf
              {{ method_field('DELETE') }}
              <div class="modal-body">
                  <p>Adakah anda pasti ingin menghapus semua rekod?</p>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                  <button class="btn btn-danger" type="submit">Hapus Semua</button>
              </div>
          </form>
      </div>
  </div>
</div>
