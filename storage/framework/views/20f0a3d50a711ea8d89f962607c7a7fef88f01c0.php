<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak | Hasil</title>
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
        table{
            width: 100%;
            margin: 0 auto;
            font-size: 1em;
            margin-bottom: 15px;
            text-align: center;
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

    </style>
</head>
<body>
    <h2 class="title">Laporan Nilai <?php echo e($quiz->quiz); ?></h2>
    <table cellpadding="10">

            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Nilai</th>

            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($item->user->name); ?></td>
            <td>
                <?php echo e($item->nilai); ?>

            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
</body>
</html>
<?php /**PATH D:\Tes Psikotes\resources\views/admin/hasilquiz/hasilperquiz_pdf.blade.php ENDPATH**/ ?>