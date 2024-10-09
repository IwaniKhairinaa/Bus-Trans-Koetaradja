<?php $__env->startSection('style'); ?>
    <style>
        .bg-image {
            background-image: url("img/bg-image.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slogan {
            color: white;
            width: 55%;
            text-align: center;
            margin: 0 auto;
            font-size: 50px;
            line-height: 70px;
        }

        .relative-content {
            position: relative;
            z-index: 99;
        }

        .bg-image::after {
            content: "";
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            background-image: linear-gradient(rgba(255, 255, 255, 0.5) 10%, rgba(0, 0, 0, 0.8) 90%);
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid bg-image" style="background-image: url('<?php echo e(asset('img/bg-image.png')); ?>')">
        <div class="relative-content">
            <h1 class="slogan poppins-bold">Kami Hadir Menjadi Teman di Setiap Perjalanan Anda</h1>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('js/demo/chart-area-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('js/demo/chart-pie-demo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/welcome.blade.php ENDPATH**/ ?>