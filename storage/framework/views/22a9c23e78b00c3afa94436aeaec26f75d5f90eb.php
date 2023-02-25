<?php $__env->startSection('title'); ?>
    Tambah Peserta Quiz
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/dashboard">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="/quizadmin"  class="opacity-5 text-dark">Data Quiz</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="<?php echo e(url()->previous()); ?>"  class="opacity-5 text-dark">Data Peserta Quiz</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Peserta Quiz</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Tambah Peserta Quiz</h6>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="<?php echo e(url()->previous()); ?>" class="btn bg-gradient-primary d-inline-flex me-md-2" >
                        Kembali
                    </a>

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

                <form action="/enrolle/<?php echo e($id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                <div class="card-body px-2 py-2 pt-0 pb-2">
                    <div class="table-responsive p-2" style="max-height: 400px !important">
                        <table class="table align-items-center mb-0"   id="myTable">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><input type="checkbox"  id="example-select-all" class="selectall">
                                    </th>

                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Peserta
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email</th>


                                </tr>
                            </thead>
                            <tbody >
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if(!$value->userquizs->where('quiz_id', $id)->first()): ?>

                                <tr>
                                    <td>
                                        <input class="select" type="checkbox" name="user[]" id="" value="<?php echo e($value->id); ?>">

                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="/backend/assets/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                    alt="user3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo e($value->name); ?></h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($value->email); ?></p>

                                    </td>
                                    

                                </tr>


                                <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary me-5">Submit</button>
                  </div>
                </form>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tes Psikotes\resources\views\admin\datapesertaquiz\enrolledpeserta.blade.php ENDPATH**/ ?>