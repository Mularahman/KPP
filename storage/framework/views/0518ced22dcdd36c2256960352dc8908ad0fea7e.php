<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/hapusumpc/<?php echo e($item->id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <h5 for="example-text-input" class="form-control-label">Anda Yakin Ingin Menghapus Data UMPC ?</h5>


        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-danger">Hapus</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
<?php /**PATH D:\Belajar Web\KPP\resources\views/admin/kategori_barang/UMPC/hapus.blade.php ENDPATH**/ ?>