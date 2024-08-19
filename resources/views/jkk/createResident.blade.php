  <!-- Modal: Add-->
  <div class="modal fade" id="createRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Daftar Penduduk</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('resident.store') }}">
                  @csrf

                  <div class="mb-3">
                      <label for="ResID" class="form-label">No. Kad Pengenalan (tanpa tanda -)</label>
                      <input type="text" required class="form-control" id="ResID" name="ResID">
                  </div>
                  <div class="mb-3">
                      <label for="name" class="form-label">Nama</label>
                      <input type="text" required class="form-control" id="ResName" name="ResName"
                          oninput="this.value = this.value.toUpperCase()">
                  </div>
                  <div class="mb-3">
                      <label for="name" class="form-label">Tanggungan</label>
                      <input type="text" required class="form-control" id="ResDependencies" name="ResDependencies"
                          oninput="this.value = this.value.toUpperCase()">
                  </div>
                  <div class="mb-3">
                      <label for="name" class="form-label">Tempat</label>
                      <select required name="ResStreet" class="form-control" required>
                          @foreach ($JKK->unique('VillageName') as $jkk)
                              <option value="{{ $jkk->VillageName }}">{{ $jkk->VillageName }}</option>
                          @endforeach
                      </select>
                  </div>

                  <div class="mb-3">
                      <label for="role" class="form-label">Keadaan Rumah</label>
                      <select required class="form-control" id="HouseCondition" name="HouseCondition">
                          <option value="" disabled selected>Sila Pilih </option>
                          <option value="Lumpur Penuh">Lumpur Penuh</option>
                          <option value="Lumpur Sedikit">Lumpur Sedikit</option>
                      </select>

                      <div class="mb-3">
                          <label for="name" class="form-label">Bantuan Lepas</label>
                          <input type="text" required class="form-control" id="ResPastAid" name="ResPastAid"
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