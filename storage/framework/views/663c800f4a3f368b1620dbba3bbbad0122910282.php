<?php $__env->startSection('content'); ?>
<section class="mt-form">
  <div class="form-wrapper">
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
          <h3>
            Aqui no <?php echo e(env('APP_NAME')); ?> <br />
            aniversariante do dia ganha <br />
            rodízio gratis
          </h3>
          <p>
            Válido somente no dia do seu aniversário,
            <strong>MEDIANTE APRESENTAÇÃO DO VOUCHER IMPRESSO E DOCUMENTO DE INDENTIFICAÇÃO COM FOTO</strong>.
            Consultar horário de funcionamento no site <a href="<?php echo e(env('URL_REDIRECT')); ?>"><?php echo e(env('APP_NAME')); ?></a>. Bebidas e sobremesas, 10% a
            parte. Cadastre-se 2 dias antes para enviarmos seu voucher.
          </p>
        </div>
      </div>

      <div class="form">
        <form action="<?php echo e(route('front.registerVoucher')); ?>" method="POST">

          <?php echo csrf_field(); ?>
          <div class="header">
            <h3>Quer receber seu voucher de Aniversário grátis</h3>
            <p>Basta preecher o formulário abaixo para recebê-lo em seu e-mail</p>
          </div>
          <div class="body">
            <div class="input-single">
              <div>
                <div class="icon">
                  <i class="bx bxs-user"></i>
                </div>
                <input type="text" name="name" placeholder="Nome" value="<?php echo e(old('name')); ?>" />
              </div>
              <span>
                <?php if($errors->first('name')): ?>
                  <i class="bx bx-info-circle"></i>
                  <?php echo e($errors->first('name')); ?>

                <?php endif; ?>
              </span>
            </div>
            <div class="input-single">
              <div>
                <div class="icon">
                  <i class='bx bxs-envelope'></i>
                </div>
                <input type="text" name="email" placeholder="E-mail"  value="<?php echo e(old('email')); ?>"/>
              </div>
              <span>
                <?php if($errors->first('email')): ?>
                  <i class="bx bx-info-circle"></i>
                  <?php echo e($errors->first('email')); ?>

                <?php endif; ?>
              </span>
            </div>
            <div class="input-double">
              <div class="input-single">
                <div>
                  <div class="icon">
                    <i class='bx bxl-whatsapp'></i>
                  </div>
                  <input type="text" name="whatsapp" placeholder="Whatsapp" value="<?php echo e(old('whatsapp')); ?>"/>
                </div>
                <span>
                  <?php if($errors->first('whatsapp')): ?>
                    <i class="bx bx-info-circle"></i>
                    <?php echo e($errors->first('whatsapp')); ?>

                  <?php endif; ?>
                </span>
              </div>
              <div class="input-single">
                <div>
                  <div class="icon">
                    <i class='bx bxs-calendar' ></i>
                  </div>
                  <input type="text" name="date_of_birth" placeholder="Data Nasc" value="<?php echo e(old('date_of_birth')); ?>"/>
                </div>
                <span>
                  <?php if($errors->first('date_of_birth')): ?>
                    <i class="bx bx-info-circle"></i>
                    <?php echo e($errors->first('date_of_birth')); ?>

                  <?php endif; ?>
                </span>
              </div>
            </div>
            <div class="input-single">
              <div>
                <div class="icon">
                  <i class='bx bx-happy-heart-eyes'></i>
                </div>
                  <select name="how_did_you_find_us">
                      <option value="">Como nos conheceu</option>
                      <option value="facebook" <?php echo e(old('where_did_you_find_us') == 'facebook' ? 'selected' : ''); ?>>Facebook</option>
                      <option value="google" <?php echo e(old('where_did_you_find_us') == 'google' ? 'selected' : ''); ?>>Google</option>
                      <option value="instagram" <?php echo e(old('where_did_you_find_us') == 'instagram' ? 'selected' : ''); ?>>Instagram</option>
                      <option value="site" <?php echo e(old('where_did_you_find_us') == 'site' ? 'selected' : ''); ?>>Site</option>
                      <option value="outros" <?php echo e(old('where_did_you_find_us') == 'outros' ? 'selected' : ''); ?>>Outros</option>
                  </select>
              </div>
              <span>
                <?php if($errors->first('how_did_you_find_us')): ?>
                  <i class="bx bx-info-circle"></i>
                  <?php echo e($errors->first('how_did_you_find_us')); ?>

                <?php endif; ?>
              </span>
            </div>
            <div class="input-captcha">
              <span>Quanto é <strong></strong> + <strong></strong> = ?</span>
              <input type="text" id="inputCaptcha" />
            </div>
            <button class="btn-captcha" type="submit" disabled>Receber voucher</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devops/Projects/matraca/laravel/matraca_birthday/resources/views/front/form.blade.php ENDPATH**/ ?>