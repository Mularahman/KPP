<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
<nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                            href="/dashboard">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Peserta</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($datauser->count()); ?>

                                    <span class="text-success text-sm font-weight-bolder">Orang</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Soal</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($datasoal->count()); ?>

                                    <span class="text-success text-sm font-weight-bolder">Soal</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Quiz</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($dataquiz->count()); ?>

                                    <span class="text-success text-sm font-weight-bolder">Quiz</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Hasil</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($datahasil->count()); ?>

                                    <span class="text-success text-sm font-weight-bolder">Hasil</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row my-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Proggress Tes Psikotes</h6>
                        </div>

                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Tes Psikotes</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Peserta</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Soal</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $dataquiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>


                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo e($item->quiz); ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold"> <?php echo e($item->quizuser->count()); ?></span>




                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold"> <?php echo e($item->soals->count()); ?></span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-info">
                                                <div class="progress-percentage">
                                                    <span class="text-xs font-weight-bold"><?php echo e($mengerjakan); ?>%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info w-60"
                                                    role="progressbar" aria-valuenow="<?php echo e($mengerjakan); ?>" aria-valuemin="0"
                                                    aria-valuemax="<?php echo e($dataquizuser); ?>"></div>
                                            </div>
                                        </div>
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

    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <a href="/tidaktuntas">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Nilai < 69</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($tidaktuntas->count()); ?>

                                    <span class="text-success text-sm font-weight-bolder">Peserta</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <a href="/tuntas">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Nilai >= 70</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($tuntas->count()); ?>

                                    <span class="text-success text-sm font-weight-bolder">Peserta</span>
                                </h5>

                            </div>

                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon  icon-shape bg-gradient-success shadow text-center border-radius-md" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <a href="/ratarata">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Nilai Rata - rata</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($ratarata->count()); ?>

                                    <span class="text-success text-sm font-weight-bolder">Peserta</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-info shadow text-center border-radius-md" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>

    </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tes Psikotes\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>