<?php $__env->startSection('content'); ?>
<section class="mt-dashboard">
    <div class="dashboard-wrapper">
    <div class="info">
        <div class="title">
          <h1>Dados Gerais</h1>
          <a href="<?php echo e(route('admin.logout')); ?>"><i class='bx bxs-exit' ></i> Sair</a>
        </div>
        <div class="grid">
        <div class="item">
            <div class="header">
            <span>Total de voucher</span>
            <i class="bx bx-stats"></i>
            </div>
            <strong><?php echo e($data->total); ?></strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Facebook</span>
            <i class="bx bxl-facebook"></i>
            </div>
            <strong><?php echo e($data->facebook); ?></strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Google</span>
            <i class="bx bxl-google"></i>
            </div>
            <strong><?php echo e($data->google); ?></strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Instagram</span>
            <i class="bx bxl-instagram"></i>
            </div>
            <strong><?php echo e($data->instagram); ?></strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Sites</span>
            <i class="bx bx-globe"></i>
            </div>
            <strong><?php echo e($data->site); ?></strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Outros</span>
            <i class="bx bx-pie-chart-alt-2"></i>
            </div>
            <strong><?php echo e($data->outros); ?></strong>
        </div>
        </div>
        <div class="title">
        <h1>Voucher Recentes</h1>
        </div>
        <table>
        <thead>
            <tr>
            <th>Nome</th>
            <th style="width: 120px">Data de Nasc</th>
            
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data->vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($voucher->name); ?></td>
                <td><?php echo e($voucher->date_of_birth); ?></td>
                
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
    <div class="hero">
        <img src="../assets/images/grafic.png" alt="Hero" />
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devops/Projects/matraca/laravel/matraca_birthday/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>