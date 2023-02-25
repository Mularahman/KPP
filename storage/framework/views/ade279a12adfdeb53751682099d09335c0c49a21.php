<?php $__env->startSection('title'); ?>
    Data WIRELESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/dashboard">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data WIRELESS</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Data WIRELESS</h6>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data
                            </button>
                        </div>
                        <div class="col">
                            <form action="/WIRELESS" method="get">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="search" placeholder="Type here...">
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
                <?php if(session()->has('success')): ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong><?php echo e(session('success')); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php endif; ?>


                <div class="card-body px-2 py-2 pt-0 pb-2">
                    <div class="table-responsive p-2" style="max-height: 400px !important">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IP WIFI
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama Device</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tipe</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Lokasi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                       Mode</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Merk</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Series</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tanggal Pembelian</th>
                                    
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>


                                    <td>
                                      <div class="d-flex px-4">
                                        <div>

                                        </div>
                                        <div class="my-auto">
                                          <h6 class="mb-0 text-xs"><?php echo e($loop->iteration); ?></h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex ">

                                        <div class="my-auto">
                                          <h6 class="mb-0 text-xs"><?php echo e($item->ip_wifi); ?></h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo e($item->device_name); ?></p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo e($item->tipe); ?></p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo e($item->lokasi); ?></p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo e($item->mode); ?></p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo e($item->merk); ?></p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo e($item->series); ?></p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo e($item->tgl_pembelian); ?></p>
                                    </td>
                                    <td class="align-middle text-center  justify-content-center d-flex">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm bg-gradient-info me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo e($item->id); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                            </svg>
                                        </button>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm bg-gradient-danger me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo e($item->id); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                        <div class="modal fade" id="exampleModal1<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <?php echo $__env->make('admin.kategori_barang.WIFI.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="modal fade" id="exampleModal2<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <?php echo $__env->make('admin.kategori_barang.WIFI.hapus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                      </span>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/tambahwifi" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">IP WIFI</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="ip_wifi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Device</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="device_name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tipe</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="tipe" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Lokasi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="lokasi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mode</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="mode" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Merk</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="merk" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Series</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="series" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Pembelian</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="tgl_pembelian" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn bg-gradient-success">Simpan Data</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar Web\KPP\resources\views/admin/kategori_barang/WIRELESS/wireless.blade.php ENDPATH**/ ?>