
<!-- Modal: Edit-->
<div class="modal fade" id="editAid{{$aid->AidID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kemaskini Barang</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('update.aid', $aid->AidID) }}" id="editAid">
                @csrf
               
                <div class="mb-3">
                    <label for="ItemName" class="form-label">Nama barang</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase()" required class="form-control" id="ItemName" name="ItemName" value="{{$aid->ItemName}}">
                </div>

                <div class="mb-3">
                    <label for="TotalAid" class="form-label">Jumlah Barang</label>
                    <input type="number" class="form-control" id="TotalAid" required name="TotalAid" value="{{$aid->TotalAid}}">
                </div>

                <div class="mb-3">
                    <label for="AidType" class="form-label">Pakej</label>
                    <select required class="form-control" id="AidType" name="AidType">
                        @foreach(['Set Lelaki', 'Set Perempuan', 'Set Bayi', 'Makanan Sahaja'] as $option)
                        <option value="{{ $option }}" @if($option == $aid->AidType) selected @endif>{{ $option }}</option>
                    @endforeach
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
<script>
$('.listAid').DataTable();

$(document).on('click', '.editAid', function() {
    var_this = $(this).parents('tr');

    $('#AidID').val(_this.find('.AidID').text());
    $('#ItemName').val(_this.find('.ItemName').text());
    $('#TotalAid').val(_this.find('.TotalAid').text());
    $('#AidType').val(_this.find('.AidType').text());
});

document.getElementById("ItemName").addEventListener("input", function() {
                            this.value = this.value.toUpperCase();
                        });
</script>