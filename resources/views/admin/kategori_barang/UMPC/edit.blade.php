<!-- Modal -->

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Peserta</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-start">
        <form action="/updateumpc/{{$item->id}}" method="post">
        @csrf
        @method('PUT')
        <label for="example-text-input" class="form-control-label ">Serial Number</label>
            <div class="input-group mb-3">


                <input type="text" class="form-control " value="{{$item->sn_umpc}}" name="sn_umpc" placeholder="Enter Serial Number" aria-label="Example text with button addon" aria-describedby="button-addon1">

            </div>
        <label for="example-text-input" class="form-control-label ">Unit</label>
            <div class="input-group mb-3">


                <input type="text" class="form-control " value="{{$item->unit}}" name="unit" placeholder="Enter Unit" aria-label="Example text with button addon" aria-describedby="button-addon1">

            </div>
        <label for="example-text-input" class="form-control-label ">Tanggal Pembelian</label>
            <div class="input-group mb-3">


                <input type="text" class="form-control " value="{{$item->tgl_pembelian}}" name="tgl_pembelian" placeholder="Enter Tanggal Pembelian" aria-label="Example text with button addon" aria-describedby="button-addon1">

            </div>




            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-success">Submit</button>
              </div>
        </form>
      </div>

    </div>
  </div>
</div>
