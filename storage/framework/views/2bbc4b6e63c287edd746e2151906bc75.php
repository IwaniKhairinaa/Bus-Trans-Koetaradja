<!-- Topbar -->
<nav class="navbar fixed-top navbar-expand navbar-dark topbar mb-4 static-top shadow custom-navbar">
    <div class="navbar-item">
        <?php if($data_detail ?? false): ?>
            <a href="<?php echo e(route('services')); ?>">Back</a>
        <?php endif; ?>
        <img src="<?php echo e(asset('img/logo_navbar.png')); ?>" class="navbar-subitem" alt="">
    </div>
    <div class="navbar-item">
        <?php if($data_detail ?? false): ?>
            <h1 class="poppins-semibold"><?php echo e($data_detail); ?></h1>
        <?php else: ?>
            <a class="<?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Beranda</a>
            <a class="<?php echo e(request()->is('services') || request()->is('services/titik-halte') || Illuminate\Support\Str::is('services/titik-halte/*', request()->path()) ? 'active' : ''); ?>"
                href="<?php echo e(route('services')); ?>">Layanan</a>
            <?php if(isAdmin()): ?>
                <a class="<?php echo e(request()->is('kritik') ? 'active' : ''); ?>" href="<?php echo e(route('kritik-saran')); ?>">Kritik dan
                    Saran</a>
                <a class="<?php echo e(request()->is('penilaian') ? 'active' : ''); ?>"
                    href="<?php echo e(route('penilaian')); ?>">Penilaian</a>
            <?php else: ?>
                <a class="<?php echo e(request()->is('fitures') ? 'active' : ''); ?>" href="<?php echo e(''); ?>">Fitur</a>
                <a class="<?php echo e(request()->is('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Kontak</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="navbar-item">
        <img src="<?php echo e(asset('img/manage_search.png')); ?>" class="navbar-subitem" alt="">
    </div>
</nav>
<!-- End of Topbar -->
<?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/partials/second-navbar.blade.php ENDPATH**/ ?>