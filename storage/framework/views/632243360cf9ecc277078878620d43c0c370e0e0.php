<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak | Soal</title>
    <style>
        body {

            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;

        }
        .title {
            text-align: center;
        }

        h2{
            font-weight: semibold;
            font-size: 1.6em;
            margin-bottom: 20px;
            margin-top: 20px;
            text-align: left;
            display: flex;
            align-items: center;
            word-wrap: break-word;
            padding-bottom: 1rem;


        }
        .table{
            width: 100%;
            margin: 0 auto;
            font-size: 1em;
            margin-bottom: 15px;
            text-align: left;
            border-collapse: collapse;
            border-spacing: 0;


        }
        th {
            background: #ea0606;
            color: #fff;


        }

        td {
            font-size: 0.8em
            color: #34495e;
            border-bottom: 1px solid rgb(223, 223, 223);

        }
        span {
            font-size: 12px;
            margin-bottom: 0px;
            padding-bottom: -50px;
        }
        table {
            margin-bottom: -15px;
        }
        .p {
            padding-left: -30px;
        }

    </style>
</head>
<body>
    <table width="100%">
        <tr>
        <td width="30" align="center"><img src="<?php echo e(public_path() . '/frontend/assets/img/logo.jpg'); ?>" width="60%"></td>
        <td class="p" width="100" align="center">
            <p>PEMERINTAH PROVINSI KALIMANTAN SELATAN <br>
            DINAS PENDIDIKAN DAN KEBUDAYAAN
                <br>
            <strong>SMK NEGERI 1 SIMPANG EMPAT</strong>
            <br>
           <span>Jl. Transmigrasi Km.7 Sarigadung, Simpang Empat, Tanah Bumbu, kal sel 72211
            <br>
            Website : www.smknlsimpangempat.sch.id Email : info@smknlsimpangempat.sch.id</span> </p>
        </td>

        </tr>
    </table>
    <hr>
    <h2 class="title">Soal <?php echo e($quiz->quiz); ?></h2>
    <table class="table" cellpadding="10">

            <tr>
                <th>No</th>
                <th colspan="3">Soal</th>


            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td rowspan="2" style="text-align: center"><?php echo e($item->no); ?></td>
            <td colspan="3"><?php echo e($item->soal); ?></td>
            <td>
                <?php echo e($item->nilai); ?>

            </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class=" <?php echo e(($item->jawaban == 'A') ? 'text-danger text-gradient' : ''); ?>">A. <?php echo e($item->a); ?>

                    </div><br>
                    <div class="<?php echo e(($item->jawaban == 'B') ? 'text-danger text-gradient' : ''); ?>">B. <?php echo e($item->b); ?>

                    </div><br>
                    <div class="<?php echo e(($item->jawaban == 'C') ? 'text-danger text-gradient' : ''); ?>">C. <?php echo e($item->c); ?>

                    </div><br>
                    <div class="<?php echo e(($item->jawaban == 'D') ? 'text-danger text-gradient' : ''); ?>">D. <?php echo e($item->d); ?>

                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
</body>
</html>
<?php /**PATH D:\Tes Psikotes\resources\views/admin/datalaporan/datasoal_pdf.blade.php ENDPATH**/ ?>