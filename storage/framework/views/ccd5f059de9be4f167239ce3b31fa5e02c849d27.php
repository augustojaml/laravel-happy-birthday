<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="cache-control" content="no-cache">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="<?php echo e(url(mix('assets/css/boxicons.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(mix('assets/css/main.css'))); ?>" />

    <title><?php echo e(!empty($title) ? 'Armazem | ' . $title : 'Armazem'); ?></title>
  </head>
  <body>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(url(mix('assets/js/libs.js'))); ?>"></script>
    <script src="<?php echo e(url(mix('assets/js/main.js'))); ?>"></script>

    <?php echo $__env->yieldContent('js'); ?>
  </body>
</html>
<?php /**PATH /home/devops/Projects/matraca/laravel/matraca_birthday/resources/views/main.blade.php ENDPATH**/ ?>