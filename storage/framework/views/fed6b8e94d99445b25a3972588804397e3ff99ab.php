<?php $__env->startSection('title'); ?>
Tes <?php echo e($data->quiz); ?> | Tes Psikotes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
    <!-- Hero -->
    <section class="section overflow-hidden pt-8 pt-lg-9  ">
        
                
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 justify-content-center text-center">
                    
                    <h2 class="lead fw-normal text-muted"><?php echo e($data->jenisquiz); ?></h2>
                    <h1 class="fw-bolder mb-3"><?php echo e($data->quiz); ?></h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-lg-0 ">
                    <div class="rounded text-start">
                        <p class="lead text-muted "><?php echo e($data->info); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-lg-0 ">
                    <div class="rounded text-start">
                        <p class="lead text-muted "><?php echo e($data->info2); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-lg-0 ">
                    <div class="rounded text-start">
                        <p class="lead text-muted "><?php echo e($data->info3); ?></p>
                    </div>
                </div>
            </div>
            <div class="text-center ">
                <a class="btn bg-gradient-success d-inline-flex align-items-center me-4"
                    style="display:inline-block;font-weight:500px;font-size:20px;z-index:10000000000;"
                    href="/<?php echo e(auth()->user()->id); ?>/<?php echo e($data->slug); ?>/<?php echo e($data->soals[0]->no); ?>">
                    Tes <?php echo e($data->quiz); ?> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tes Psikotes\resources\views\tes\numerik.blade.php ENDPATH**/ ?>