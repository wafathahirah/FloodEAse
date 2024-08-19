  <!-- Modal: Add-->
  <div class="modal fade" id="createPosition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Jawatan</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('position.store') }}">
                  @csrf

                  <div class="mb-3">
                      <label for="name" class="form-label">Nama Jawatan</label>
                      <input type="text" class="form-control" id="PosName" name="PosName"
                          oninput="this.value = this.value.toUpperCase()" required>
                  </div>

                  <div class="mb-3">
                      <label for="PosDesc" class="form-label">Tugasan</label>
                      <input type="text" required class="form-control" id="PosDesc" name="PosDesc" oninput="this.value = this.value.toUpperCase()">
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