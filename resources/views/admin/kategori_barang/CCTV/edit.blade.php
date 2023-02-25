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
        <form action="/updatecctv/{{$item->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">IP CCTV</label>
            <input type="text" class="form-control" value="{{$item->ip_cctv}}" id="exampleFormControlInput1" placeholder=""
                name="ip_cctv" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Device</label>
            <input type="text" class="form-control"  value="{{$item->device_name}}" id="exampleFormControlInput1" placeholder=""
                name="device_name" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tipe</label>
            <input type="text" class="form-control"  value="{{$item->tipe}}" id="exampleFormControlInput1" placeholder=""
                name="tipe" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Lokasi</label>
            <input type="text" class="form-control"  value="{{$item->lokasi}}" id="exampleFormControlInput1" placeholder=""
                name="lokasi" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control"  value="{{$item->username}}" id="exampleFormControlInput1" placeholder=""
                name="username" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="text" class="form-control"  value="{{$item->password}}" id="exampleFormControlInput1" placeholder=""
                name="password" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Pembelian</label>
            <input type="date" class="form-control"  value="{{$item->tgl_pembelian}}" id="exampleFormControlInput1" placeholder=""
                name="tgl_pembelian" required>
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
