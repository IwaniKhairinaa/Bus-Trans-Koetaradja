<?php $__env->startSection('style'); ?>
    <style>
        .bg-image {
            background-image: url("img/bg-image.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh !important;
            padding: 0;
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

        .relative-content {
            padding-top: 70px;
            position: relative;
            z-index: 99;
        }

        .sub-navbar {
            margin-top: 10px;
            display: flex;
            background-color: #4e429e !important;
        }

        .sub-navbar .item {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            color: white;
            gap: 10px;
            cursor: pointer;
        }

        .sub-navbar .item.active {
            background-color: #443b83 !important;
        }

        .sub-navbar .item:hover {
            background-color: #443b83 !important;
        }

        .sub-navbar .item .notif {
            width: 20px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-content: center;
            background-color: white;
            color: #4e429e;
            border-radius: 5px;
            font-size: 12px;
        }

        .content {
            padding: 25px;
            height: calc(100vh - 140px);
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
            gap: 20px;
        }

        .comment {
            background-color: white;
            border-radius: 40px;
            border: 5px solid #4e429e;
            padding: 30px;
            width: 80%;
            display: flex;
            height: fit-content;
            gap: 10px;
        }

        .comment .left img {
            width: 150px;
            height: 150px;
            transform: scale(1.3);
        }

        .comment .right {
            width: 100%;
        }

        .comment .right .name h1 {
            color: black;
            font-size: 30px;
        }

        .comment .right .name span {
            color: black;
            font-size: 15px;
            margin-top: -10px;
            display: block;
        }

        .comment .right .kritik-saran {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            color: black;
        }

        .comment .right .star {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .comment .right .star i {
            font-size: 30px;
            cursor: pointer;
            transition: 300ms;
            color: yellow;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid bg-image" style="background-image: url('<?php echo e(asset('img/bg-image.png')); ?>')">
        <div class="relative-content">
            <div class="sub-navbar">
                <a href="<?php echo e(route('penilaian')); ?>"
                    class="text-decoration-none item <?php echo e(request()->is('penilaian') ? 'active' : ''); ?>">
                    <span class="title">Hari Ini</span>
                    <span class="poppins-semibold notif"><?php echo e($jumlah_notif); ?></span>
                </a>
                <a href="<?php echo e(route('penilaian.kemarin')); ?>"
                    class="text-decoration-none item <?php echo e(request()->is('penilaian/kemarin') ? 'active' : ''); ?>">
                    <span class="title">Kemarin</span>
                </a>
                <a href="" class="text-decoration-none item <?php echo e(request()->is('penilaian/filter') ? 'active' : ''); ?>">
                    <span class="title">Filter</span>
                </a>
            </div>
            <div class="content">
                <?php $__currentLoopData = $rating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="comment">
                        <div class="left">
                            <img src="<?php echo e(asset('img/icon-profile.png')); ?>" alt="">
                        </div>
                        <div class="right">
                            <div class="name">
                                <h1 class="poppins-bold"><?php echo e($r->nama); ?></h1>
                                <span class="poppins-bold"><?php echo e($r->email); ?></span>
                            </div>
                            <div class="star">
                                <?php for($i = 1; $i <= $r->rating; $i++): ?>
                                    <i class="btn-rating fas fa-star"></i>
                                <?php endfor; ?>
                            </div>
                            <div class="kritik-saran">
                                <span class="poppins-semibold"><?php echo e($r->alasan); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/penilaian.blade.php ENDPATH**/ ?>