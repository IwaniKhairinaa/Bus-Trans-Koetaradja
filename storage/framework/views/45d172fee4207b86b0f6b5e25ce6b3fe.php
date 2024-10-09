<!-- Topbar -->
<nav class="navbar fixed-top navbar-expand navbar-dark topbar mb-4 static-top shadow custom-navbar">
    <div class="navbar-item container-fluid d-flex justify-content-between">
        <a class="navbar-brands poppins-semibold" href="/">Trans Koetaradja</a>
        <div class="navbar-menu">
            <a class="<?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Beranda</a>
            <a class="<?php echo e(request()->is('services') ? 'active' : ''); ?>" href="<?php echo e(route('services')); ?>">Layanan</a>
            <a class="<?php echo e(request()->is('fitures') ? 'active' : ''); ?>" href="<?php echo e(''); ?>">Fitur</a>
            <a class="<?php echo e(request()->is('contact') ? 'active' : ''); ?>" href="<?php echo e(''); ?>">Kontak</a>
        </div>
        <div class="action">
            <a class="poppins-semibold" href="<?php echo e(route('register.show')); ?>">Daftar</a>
            <a class="masuk poppins-semibold" href="<?php echo e(route('login.show')); ?>">Masuk</a>
        </div>
    </div>
</nav>
<!-- End of Topbar -->
<?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/partials/navbar.blade.php ENDPATH**/ ?>