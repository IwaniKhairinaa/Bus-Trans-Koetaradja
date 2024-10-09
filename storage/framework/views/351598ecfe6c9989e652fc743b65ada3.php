<!-- Topbar -->
<nav class="navbar fixed-top navbar-expand navbar-dark topbar mb-4 static-top shadow custom-navbar">
    <div class="navbar-item">
        <a class="navbar-brands poppins-semibold" href="/">Trans Koetaradja</a>
    </div>
    <div class="navbar-item">
        <a class="<?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Beranda</a>
        <a class="<?php echo e(request()->is('services') || request()->is('services/titik-halte') ? 'active' : ''); ?>"
            href="<?php echo e(route('services')); ?>">Layanan</a>
        <?php if(isAdmin()): ?>
            <a class="<?php echo e(request()->is('kritik-saran') || request()->is('kritik-saran/ditanggapi') ? 'active' : ''); ?>"
                href="<?php echo e(route('kritik-saran')); ?>">Kritik dan
                Saran</a>
            <a class="<?php echo e(request()->is('penilaian') || request()->is('penilaian/kemarin') ? 'active' : ''); ?>"
                href="<?php echo e(route('penilaian')); ?>">Penilaian</a>
        <?php else: ?>
            <a class="<?php echo e(request()->is('fitures') ? 'active' : ''); ?>" href="<?php echo e(''); ?>">Fitur</a>
            <a class="<?php echo e(request()->is('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Kontak</a>
        <?php endif; ?>
    </div>
    <div class="navbar-item">
        <?php if(!isAdmin()): ?>
            <a class="poppins-semibold text-decoration-none text-white" href="<?php echo e(route('register.show')); ?>">Daftar</a>
            <a class="masuk poppins-semibold text-decoration-none" href="<?php echo e(route('login.show')); ?>">Masuk</a>
        <?php endif; ?>
    </div>
</nav>
<!-- End of Topbar -->
<?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/partials/user-navbar.blade.php ENDPATH**/ ?>