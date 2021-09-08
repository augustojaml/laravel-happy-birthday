<?php $__env->startSection('content'); ?>
<section class="mt-home">
  <div class="home-wrapper">
    <div class="container">
      <div class="info">
        <a href="<?php echo e(env('URL_REDIRECT')); ?>" class="header">
          <img src="<?php echo e(url(asset('assets/images/logo.png'))); ?>" alt="Armazem do juca" />
          <span>
          <i class="bx bxs-home"></i>
          Voltar para Home
          </span>
        </a>
        <div class="body">
          <h1>
            Hoje vai ser <br />
            Uma Festa!
          </h1>
          <p>
            No dia do seu aniversário o <strong><?php echo e(env('APP_NAME')); ?></strong> vai te presentear com um voucher valendo um rodźio de pizza.
          </p>
          <h3>E aí, quer ganhar um rodźio gratuito?</h3>
          <a href="<?php echo e(route('front.form')); ?>"> Retire seu vouche </a>
        </div>
      </div>
      <div class="hero">
        <img class="animate-up-down" src="<?php echo e(url(asset('assets/images/balloon.png'))); ?>" alt="Armazem do Juca Balões" />
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devops/Projects/apache/laravel-happy-birthday/resources/views/front/home.blade.php ENDPATH**/ ?>