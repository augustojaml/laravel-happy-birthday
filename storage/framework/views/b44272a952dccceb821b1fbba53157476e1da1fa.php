<?php $__env->startSection('content'); ?>
<section class="mt-congratulations">
  <div class="congratulations-wrapper">
    <div class="container">
      <a class="site" href="<?php echo e(env('URL_REDIRECT')); ?>"><img class="logo" src="<?php echo e(url(asset('assets/images/logo.png'))); ?>" alt="Armazem do Juca" /></a>

      <h1>Parabéns</h1>
      <h3><?php echo e($voucherUser->name); ?></h3>
      <div class="jump">
        <div class="dots1">
          <div class="dot dot1"></div>
          <div class="dot dot2"></div>
          <div class="circle"></div>
        </div>
        <div class="dots2">
          <div class="dot dot1"></div>
          <div class="dot dot2"></div>
          <div class="circle"></div>
        </div>
        <img class="present" src="<?php echo e(url(asset('assets/images/present.png'))); ?>" alt="Armazem Present" />
      </div>
      <p>
        Voce receberá no seu e-mail <strong>(<?php echo e($voucherUser->email); ?>)</strong> o vouche para ser
        consumido no dia do seu aniversário. Se não encontrá-lo na sua caixa de entrada, verique sua caixa de span.
      </p>
      <a class="button" href="<?php echo e(env('URL_REDIRECT')); ?>">Voltar para o site</a>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
      window.history.pushState(null, "", window.location.href);
      window.onpopstate = function () {
          window.history.pushState(null, "", window.location.href);
      };
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devops/Projects/matraca/laravel/matraca_birthday/resources/views/front/congratulations.blade.php ENDPATH**/ ?>