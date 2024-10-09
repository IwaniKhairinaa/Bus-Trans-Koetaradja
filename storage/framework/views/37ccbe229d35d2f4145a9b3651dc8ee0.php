<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <title>Koetaradja <?php echo e($title ?? ' '); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('css/poppins.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('css/custom-navbar-second.css')); ?>">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <style>
        body,
        * {
            font-family: "Poppins";
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>

    <?php echo $__env->yieldContent('style'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        
        <?php echo $__env->yieldContent('sidebar'); ?>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <?php echo $__env->make('partials.second-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                

                <?php echo $__env->yieldContent('content'); ?>

            </div>
            <!-- End of Main Content -->

            
            <?php echo $__env->yieldContent('footer'); ?>
            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\laravel-bus-trans-koetaradja\resources\views/layouts/second.blade.php ENDPATH**/ ?>