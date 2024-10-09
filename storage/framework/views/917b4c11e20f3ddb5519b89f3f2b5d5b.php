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

        .relative-content {
            position: relative;
            z-index: 99;
            padding-top: 70px;
        }

        .bg-image::after {
            content: "";
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            background-image: linear-gradient(white 50%, rgba(255, 255, 255, 0.5));
        }

        .welcome {
            color: #292477;
            font-size: 35px;
            width: 60%;
        }

        .btn-masuk {
            background-color: #6C16A0;
            border: none;
            padding: 7px 30px;
            border-radius: 15px;
            color: white;
            width: fit-content;
        }

        .btn-masuk:hover {
            color: white;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid bg-image" style="background-image: url('<?php echo e(asset('img/bg-image.png')); ?>')">
        <div class="relative-content">
            <h1 class="welcome poppins-semibold text-center mx-auto">Akun berhasil dibuat, klik tombol masuk untuk
                melanjutkan</h1>
            <a href="<?php echo e(route('services')); ?>"
                class="btn-masuk text-decoration-none poppins-bold mt-4 mx-auto d-block">Masuk</a>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/successfully-register.blade.php ENDPATH**/ ?>