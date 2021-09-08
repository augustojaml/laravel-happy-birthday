<?php $__env->startSection('content'); ?>
<section class="mt-login">
    <div class="login-wrapper">
    <div class="hero">
        <img src="<?php echo e(url(asset('assets/images/hero.png'))); ?>" alt="Hero" />
    </div>
    <div class="form">
        <form action="" method="POST" data-action="<?php echo e(route('admin.submitLogin')); ?>">
        <div class="header">
            <img src="<?php echo e(url(asset('assets/images/logo-matraca.png'))); ?>" alt="Hero" />
            <div class="message-content">
              <div class="message">Password e/ou senha inválidos</div>
            </div>
        </div>
        <div class="input-single">
            <label>
            <i class="bx bxs-envelope"></i>
            E-mail
            </label>
            <input type="text" name="email" />
            <span>
            &nbsp;
            
            </span>
        </div>
        <div class="input-single">
            <label>
            <i class="bx bxs-lock-open-alt"></i>
            Password
            </label>
            <input type="password" name="password" />
            <span>
              &nbsp;
            
            </span>
        </div>
        <div class="input-single">
          <button type="submit">Entrar</button>
        </div>
        </form>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devops/Projects/matraca/laravel/matraca_birthday/resources/views/admin/login.blade.php ENDPATH**/ ?>