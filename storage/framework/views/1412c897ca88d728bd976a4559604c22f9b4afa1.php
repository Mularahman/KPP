<?php $__env->startSection('title'); ?>
    Data Peserta Quiz
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/dashboard">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="/quizadmin"
                    class="opacity-5 text-dark">Data Quiz</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Peserta Quiz</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Data Peserta Quiz</h6>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="/enrolle/<?php echo e($id); ?>" class="btn bg-gradient-primary d-inline-flex me-md-2"
                        type="submit">

                        Tambah Data
                    </a>



                    <button class="btn bg-gradient-danger d-inline-flex me-md-2"
                        type="submit" id="deleteSelected">

                        Hapus Data Pilihan
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><input type="checkbox"  id="example-select-all" class="selectall">
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No
                                    </th>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama Peserta
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <input class="select" type="checkbox" name="user[]" id="" value="<?php echo e($item->id); ?>">

                                        </td>
                                        <td>
                                            <p class="font-weight-bold mb-0"><?php echo e($loop->iteration); ?></p>

                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/backend/assets/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                        alt="user3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?php echo e($item->user->name); ?></h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo e($item->user->email); ?></p>

                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <?php if($item->status == 1): ?>
                                            <span class="badge badge-sm bg-gradient-success">Sudah Mengerjakan</span>
                                            <?php else: ?>
                                            <span class="badge badge-sm bg-gradient-warning">Belum Mengerjakan</span>
                                            <?php endif; ?>

                                        </td>
                                        <td class="align-middle text-center  justify-content-center d-flex">

                                            <form action="/hapusenroll/<?php echo e($item->id); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn bg-gradient-danger me-md-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </button>
                                            </form>

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
    <script>


        $('.selectall').change(function() {
            $(".select").not(this).prop('checked', this.checked)
        });
        $('.select').change(function() {
            if ($('.select:checked').length == $(
                    '.select').length) {
                $('.selectall').prop('checked', true);
            } else {
                $('.selectall').prop('checked', false);
            }
        });

        var selectVal = [];
        $('#deleteSelected').on('click', function() {
            $(".select:checked").each(function() {
                selectVal.push($(this).val());
            });
            if (confirm(`Are you sure to delete ${selectVal.length} inactive users!`) == true) {
                $(this).html('Please Wait...').prop('disabled', true)
            } else {
                console.log('ok');
            }
            $.post('<?php echo e(route('delete.selected')); ?>', {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    data: selectVal ? selectVal : []
                },
                function(data) {
                    $("input[type='checkbox']").prop('checked', false);
                    selectVal = []
                    $('#deleteSelected').html('Delete Selected')
                    $('#deleteSelected').removeAttr('disabled')
                    location.reload()
                });
        })

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tes Psikotes\resources\views\admin\datapesertaquiz\enrolled.blade.php ENDPATH**/ ?>