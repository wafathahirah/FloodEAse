<!-- Modal: Edit-->
<div class="modal fade" id="viewRes{{$resident->ResID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Penduduk Kampung</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form  id="editCommittee">

            <div class="modal-body">
                    <div class="mb-3">
                     <label for="SID" class="form-label">No. Kad Pengenalan</label>
                     <input type="text" readonly class="form-control" value="{{$resident->ResID}}">
                 </div>
                 <div class="mb-3">
                     <label for="name" class="form-label">Nama</label>
                     <input type="text" readonly class="form-control" value="{{$resident->ResName}}">
                 </div>
 
                 <div class="mb-3">
                     <label for="number" class="form-label">Kondisi Rumah</label>
                     <input type="text" readonly class="form-control"  value="{{$resident->HouseCondition}}">
                 </div>

                 <div class="mb-3">
                    <label for="name" class="form-label">Bandar</label>
                    <input type="text" readonly class="form-control" value="{{$resident->ResCity}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Tanggungan</label>
                    <input type="text" readonly class="form-control" value="{{$resident->ResDependencies}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Bantuan Lepas</label>
                    <input type="text" readonly class="form-control"  value="{{$resident->ResPastAid}}">
                </div>    
                </form>
            </div>
        </div>
    </div>
 </div>


 