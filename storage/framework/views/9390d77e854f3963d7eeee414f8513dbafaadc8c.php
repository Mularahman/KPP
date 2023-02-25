<?php $__env->startSection('title'); ?>
    Data Soal
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/dashboard">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="/quizadmin"  class="opacity-5 text-dark">Data Quiz</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Soal</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Data Soal</h6>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="/tambahsoal/<?php echo e($id); ?>" class="btn bg-gradient-primary d-inline-flex me-md-2" type="submit">

                        Tambah Data
                    </a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Import Excel
                    </button>

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
                    <div class="table-responsive p-2">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No
                                    </th>
                                    <th colspan="3" class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Soal
                                    </th>
                                    
                                    
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td rowspan="2">
                                        <p class="font-weight-bold mb-0"><?php echo e($item->no); ?></p>

                                    </td>
                                    <td colspan="3">
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo e($item->soal); ?></h6>

                                            </div>
                                        </div>
                                    </td>
                                    
                                    
                                    <td class="align-middle text-center  justify-content-center d-flex">

                                        <a type="button" class="btn bg-gradient-info me-md-1" href="/editsoal/<?php echo e($item->id); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                            </svg>
                                        </a>
                                        <form action="/hapussoal/<?php echo e($item->id); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn bg-gradient-danger me-md-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg>
                                            </button>
                                        </form>
                                        <div class="modal fade" id="exampleModal1<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <?php echo $__env->make('admin.datapeserta.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="align-middle text-start text-sm  font-weight-bold mb-0">
                                        <div class=" <?php echo e(($item->jawaban == 'A') ? 'text-danger text-gradient' : ''); ?>">A. <?php echo e($item->a); ?>

                                            </div><br>
                                            <div class="<?php echo e(($item->jawaban == 'B') ? 'text-danger text-gradient' : ''); ?>">B. <?php echo e($item->b); ?>

                                            </div><br>
                                            <div class="<?php echo e(($item->jawaban == 'C') ? 'text-danger text-gradient' : ''); ?>">C. <?php echo e($item->c); ?>

                                            </div><br>
                                            <div class="<?php echo e(($item->jawaban == 'D') ? 'text-danger text-gradient' : ''); ?>">D. <?php echo e($item->d); ?>

                                            </div>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Soal</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambahsoal/<?php echo e($id); ?>/import" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo e(csrf_field()); ?>

            <label for="example-text-input" class="form-control-label">Pilih File Excel</label>
            <div class="input-group mb-3">

                <input type="file" class="form-control "  name="file" placeholder="Enter File Excel" aria-label="Example text with button addon" aria-describedby="button-addon1">

            </div>

        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary">Submit</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tes Psikotes\resources\views\admin\datasoal\soal.blade.php ENDPATH**/ ?>