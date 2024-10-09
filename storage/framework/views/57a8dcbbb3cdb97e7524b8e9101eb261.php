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
            background-image: linear-gradient(white 20%, rgba(255, 255, 255, 0.5));
        }

        .welcome {
            color: #292477;
        }

        .please {
            color: black;
            font-size: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            justify-content: center;
        }

        .form-items {
            background-color: #292577;
            border-radius: 20px;
            width: 50%;
            display: flex;
            align-items: center;
            padding: 7px 20px;
            color: white;
        }

        .form-items label {
            flex: 0.5;
            margin-top: 6px;
        }

        .form-items span {
            margin-right: 10px;
        }

        .form-items input {
            flex: 2;
            background-color: transparent;
            outline: none;
            border: none;
            color: white;
        }

        .btn-next {
            background-color: #6C16A0;
            border: none;
            padding: 7px 20px;
            border-radius: 15px;
            color: white;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid bg-image" style="background-image: url('<?php echo e(asset('img/bg-image.png')); ?>')">
        <div class="relative-content">
            <h1 class="welcome poppins-black">SELAMAT DATANG DI WEB TRANS KOETARADJA</h1>
            <p class="text-center please mt-3">Silahkan masukkan data diri anda :</p>
            <form action="<?php echo e(route('register.show.next')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-items">
                    <label for="nama" class="poppins-bold">Nama</label>
                    <span>:</span>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="form-items">
                    <label for="ttl" class="poppins-bold">TTL</label>
                    <span>:</span>
                    <input type="text" name="ttl" id="ttl">
                </div>
                <div class="form-items">
                    <label for="alamat" class="poppins-bold">Alamat</label>
                    <span>:</span>
                    <input type="text" name="alamat" id="alamat">
                </div>
                <div class="form-items">
                    <label for="email" class="poppins-bold">Email</label>
                    <span>:</span>
                    <input type="text" name="email" id="email">
                </div>
                <button class="btn-next poppins-bold">Selanjutnya</button>
            </form>
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

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/signup.blade.php ENDPATH**/ ?>