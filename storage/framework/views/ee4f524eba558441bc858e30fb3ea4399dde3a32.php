<?php $__env->startSection('title'); ?>
    My Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <!-- Hero -->

        <section class="section section-lg bg-soft section-header overflow-hidden pt-8  pb-6  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card  border-0 shadow h-100">
                            <div class="card-header profile-cover d-sm-flex flex-row align-items-center flex-0">

                            </div>
                            <div class="card bg-gradient-success shadow border-0 text-center p-0  h-100">
                                <div class="card-body pb-3">
                                    <?php if(auth()->user()->image): ?>
                            <img src="<?php echo e(asset ('storage/'. auth()->user()->image)); ?>"
                            class="avatar-xl rounded-circle mx-auto mt-n6 mb-4 shadow" alt="<?php echo e(auth()->user()->name); ?>">
                            <?php else: ?>
                            <img src="<?php echo e('https://ui-avatars.com/api/?size=32&name=' . auth()->user()->name); ?>"
                            class="avatar-xl rounded-circle mx-auto mt-n6 mb-4 shadow" alt="<?php echo e(auth()->user()->name); ?>">
                            <?php endif; ?>

                                    <h4 class="h3"><?php echo e(auth()->user()->name); ?></h4>
                                    <h5 class="fw-normal"><?php echo e(auth()->user()->email); ?></h5>
                                    
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card bg-yellow-100 border-0 shadow h-100">
                            <div class="card-header  flex-row align-items-center flex-0 ">
                                <div class="d-block ">
                                    <h2 class="h5 mb-5 text-success text-gradient text-center">Update Data</h2>
                                    <?php if(session()->has('errors')): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong><?php echo e(session('errors')); ?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(session()->has('successs')): ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong><?php echo e(session('successs')); ?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <div class=" ">
                                        <form action="/updateprofile/<?php echo e($id); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="mb-3">
                                                <label>Your Name</label>
                                                <div class="input-group">
                                                    
                                                    <input type="text" class="form-control" placeholder="Username"
                                                        name="name" value="<?php echo e($data->name); ?>">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email">Your Email</label>
                                                <div class="input-group">
                                                    
                                                    <input type="email" class="form-control" value="<?php echo e($data->email); ?>"
                                                        placeholder="example@company.com" id="email" name="email">
                                                </div>
                                            </div>
                                            <label for="exampleInputEmail1" class="form-label">Upload Image</label>
                                            <input type="hidden" name="oldimage" value="<?php echo e($data->image); ?>">
                                            <div class="d-flex align-items-center form-control mb-4">
                                                <div class="me-3">
                                                    <!-- Avatar -->
                                                    <img  class="rounded avatar img img-preview " >
                                                </div>
                                                <div class="file-field">
                                                    <div class="d-flex justify-content-xl-center ms-xl-3">
                                                        <div class="d-flex">
                                                            <svg class="icon text-gray-500 me-2" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <input type="file" id="image" name="image" onchange="previewimage()">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn bg-gradient-success">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card bg-yellow-100 border-0 shadow h-100 ">
                            <div class="card-header  flex-row align-items-center flex-0">
                                <div class="d-block mb-3 mb-sm-0">
                                    <h2 class="h5 mb-5 text-success text-gradient text-center">Update Password</h2>
                                    <?php if(session()->has('error')): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong><?php echo e(session('error')); ?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(session()->has('success')): ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong><?php echo e(session('success')); ?></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                    <form action="/update/<?php echo e($id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>

                                        <div class="mb-3">
                                            <label for="password">Your Password</label>
                                            <div class="input-group">
                                                
                                                <input type="password" name="old_password" placeholder="Password"
                                                    class="form-control" id="password" required>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <label for="password">New Password</label>
                                            <div class="input-group">
                                                
                                                <input type="password" name="new_password" placeholder="Password"
                                                    class="form-control" id="password" required>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label for="confirm_password">Confirm Password</label>
                                            <div class="input-group">
                                                
                                                <input type="password" placeholder="Confirm Password"
                                                    class="form-control" id="confirm_password"
                                                    name="confirm_password" required>
                                            </div>
                                        </div>
                                        <div class="d-grid pt-3">
                                            <button type="submit" class="btn bg-gradient-success">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script>
        function previewimage(){
            const image = document.querySelector('#image');
            const imgpreview = document.querySelector('.img-preview');

            imgpreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload =function(oFREvent) {
                imgpreview.src = oFREvent.target.result;
            }
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tes Psikotes\resources\views/myprofile.blade.php ENDPATH**/ ?>