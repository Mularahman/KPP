<?php $__env->startSection('title'); ?><?php echo e($quiz->quiz); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<main>

<!-- Hero -->
<section class="section overflow-hidden pt-6 pb-9 pb-lg-7  ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="fs-5 fw-bold mb-0">Soal <?php echo e($data->no); ?></h2>
                                </div>
                                <?php

                                    $time = explode(':',$data->quiz->time);
                                ?>

                                
                                <div class="col text-end" >
                                    <a class="btn btn-sm bg-gradient-info "id="time" >00:00:00</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">

                                </thead>
                                <tbody>
                                <tr>
                                    <th class="text-gray-900 px-4 " colspan="3" scope="row" >
                                    <div class="row">
                                        <div class="col-6">

                                                <?php echo e($data->soal); ?>

                                            </div>
                                        </div>
                                    </th>

                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-lg-1">
                                                <?php if($jawaban != null && $jawaban->jawaban == 'A'): ?>
                                            <button  onclick="send(this)" id="pilihan_a" class="btn-dark btn   d-inline-flex align-items-center me-md-3" type="submit">A</button>
                                            <?php else: ?>
                                            <button  onclick="send(this)" id="pilihan_a" class="<?php echo e($data->jawab == 'A' ?'btn-dark' : 'btn-outline-dark'); ?> btn  d-inline-flex align-items-center me-md-3" type="submit">A</button>
                                            <?php endif; ?>
                                            </div>
                                            <div class=" col-10 "><?php echo e($data->a); ?></div>
                                        </div>

                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-lg-1">
                                                <?php if($jawaban != null && $jawaban->jawaban == 'B'): ?>
                                                <button  onclick="send(this)" id="pilihan_a" class="btn-dark btn  d-inline-flex align-items-center me-md-3" type="submit">B</button>
                                                <?php else: ?>
                                                <button  onclick="send(this)" id="pilihan_a" class="<?php echo e($data->jawab == 'B' ?'btn-dark' : 'btn-outline-dark'); ?> btn  d-inline-flex align-items-center me-md-3" type="submit">B</button>
                                                <?php endif; ?>
                                                </div>
                                        <div class=" col-10 "><?php echo e($data->b); ?></div>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-lg-1">
                                                <?php if($jawaban != null && $jawaban->jawaban == 'C'): ?>
                                                <button  onclick="send(this)" id="pilihan_a" class="btn-dark btn  d-inline-flex align-items-center me-md-3" type="submit">C</button>
                                                <?php else: ?>
                                                <button  onclick="send(this)" id="pilihan_a" class="<?php echo e($data->jawab == 'C' ?'btn-primary' : 'btn-outline-dark'); ?> btn  d-inline-flex align-items-center me-md-3" type="submit">C</button>
                                                <?php endif; ?>
                                                </div>
                                        <div class=" col-10 "><?php echo e($data->c); ?></div>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-lg-1">
                                            <?php if($jawaban != null && $jawaban->jawaban == 'D'): ?>
                                            <button  onclick="send(this)" id="pilihan_a" class="btn-dark btn  d-inline-flex align-items-center me-md-3" type="submit">D</button>
                                            <?php else: ?>
                                            <button  onclick="send(this)" id="pilihan_a" class="<?php echo e($data->jawab == 'D' ?'btn-dark' : 'btn-outline-dark'); ?> btn  d-inline-flex align-items-center me-md-3" type="submit">D</button>
                                            <?php endif; ?>
                                            </div>
                                        <div class=" col-10 "><?php echo e($data->d); ?></div>
                                    </th>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <li class="dropdown-divider mt-4 mb-0 border-gray-700"></li>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <?php if($previous): ?>
                                    <a href="/<?php echo e(auth()->user()->id); ?>/<?php echo e($data->quiz->slug); ?>/<?php echo e($previous->no); ?>" class="btn bg-gradient-success text-white">previous</a>
                                    <?php endif; ?>

                                </div>
                                <div class="col text-end">
                                    <?php if($next): ?>
                                    <a href="/<?php echo e(auth()->user()->id); ?>/<?php echo e($data->quiz->slug); ?>/<?php echo e($next->no); ?>" class="btn  bg-gradient-success text-white">Next</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="col-12 px-0 mb-4">
                        <div class="col-12 mb-4">
                            <div class="card shadow border-0 text-center p-0">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class=" mb-0 btn bg-gradient-info">Terjawab <?php echo e($jawabans->count()); ?></h3>
                                        </div>
                                        <li class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                                        <div class=" justify text-center">
                                            <div class="row-cols-5 ">

                                                <?php $__currentLoopData = $quiz->soals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__empty_1 = true; $__currentLoopData = $no->jawab->where('user_id',auth()->id()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawabanuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <?php if($jawabanuser->soal_id == $no->id && $jawabanuser->user_id == auth()->id() ): ?>
                                                    <a  id="jawab" class="btn btn-dark w-25 align-items-center m-1 <?php echo e($jawabanuser->user_id == auth()->id() ? 'btn-dark' : 'btn-outline-dark'); ?> text-white" href="/<?php echo e(auth()->user()->id); ?>/<?php echo e($quiz->slug); ?>/<?php echo e($no->no); ?>"><?php echo e($no->no); ?></a>
                                                <?php else: ?>
                                                    <a  id="jawab" class="<?php echo e($no); ?>  btn btn-outline-dark  w-25 align-items-center m-1" href="/<?php echo e(auth()->user()->id); ?>/<?php echo e($quiz->slug); ?>/<?php echo e($no->no); ?>"><?php echo e($no->no); ?></a>
                                                <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <a  id="jawab" class="<?php echo e($no); ?>  btn btn-outline-dark  w-25  align-items-center m-1 d-inline-flex " href="/<?php echo e(auth()->user()->id); ?>/<?php echo e($quiz->slug); ?>/<?php echo e($no->no); ?>"><?php echo e($no->no); ?></a>
                                                <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                          </div>

                                        <li class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                                <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Akhiri Tes
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Anda Yakin Ingin Mengakhiri Tes ?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        Waktu Masih Tersisa <br>
       <h4 class="time" id="times"><?php echo e($data->quiz->time); ?></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/<?php echo e($quiz->slug); ?>/hasil" class="btn  bg-gradient-danger">Akhiri Tes</a>
      </div>
    </div>
  </div>
</div>
    </div>
</section>


</main>

    
    <script>
        // Set the date we're counting down to


        var countTime = "<?php echo e(date('M d, Y', strtotime($data->quiz->date))); ?> " +"<?php echo e($data->quiz->time); ?>"

        var countDownDate = new Date(countTime);
        console.log(countTime);
        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds

          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Output the result in an element with id="demo"
          document.getElementById("time").innerHTML =  hours + ":"
          + minutes + ": " + seconds ;
          document.getElementById("times").innerHTML =  hours + ":"
          + minutes + ": " + seconds ;


          // If the count down is over, write some text
          if (distance <= 0) {
            window.location.href = "<?php echo e(route('hasil',$quiz)); ?>";
          }
        }, 1000);
        </script>
    <script>

    function send(object) {
        console.log(
            )
            const btn = document.querySelectorAll('#pilihan_a')
            btn.forEach((item) => {
            item.classList.remove('btn-dark')
            item.classList.add('btn-outline-dark')
            })
    $.ajax({
        type:'POST',
        url:"<?php echo e(route('jawab')); ?>",
        data:{
        '_token':'<?php echo e(csrf_token()); ?>',
        'jawaban':  $(event.target).html(),
        'user_id': '<?php echo e(auth()->user()->id); ?>',
        'quiz_id': '<?php echo e($data->quiz_id); ?>',
        'soal_id': '<?php echo e($data->id); ?>'
        },
        success:function(result){

                $(object).removeClass('btn-outline-dark')
                $(object).addClass('btn-dark')
            }

    });
    }


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tes Psikotes\resources\views/quiz/quiz.blade.php ENDPATH**/ ?>