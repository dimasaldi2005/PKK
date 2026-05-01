

<?php $__env->startSection('title', 'Profil'); ?>

<?php $__env->startSection('content'); ?>


<h2 style="font-size: 20px; font-weight: 700; color: #222; margin-bottom: 16px;">Informasi Pribadi</h2>

<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); margin-bottom: 30px;">

    <table style="font-size: 14px; color: #333; width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 6px 0; width: 160px; font-weight: 500;">Nama lengkap :</td>
            <td style="padding: 6px 0;"><?php echo e($user->name); ?></td>
        </tr>
        <tr>
            <td style="padding: 6px 0; font-weight: 500;">Email :</td>
            <td style="padding: 6px 0;"><?php echo e($user->email ?? '-'); ?></td>
        </tr>
        <tr>
            <td style="padding: 6px 0; font-weight: 500;">Nomor telepon :</td>
            <td style="padding: 6px 0;"><?php echo e($user->nomer_tlp ?? '-'); ?></td>
        </tr>
        <tr>
            <td style="padding: 6px 0; font-weight: 500;">Alamat :</td>
            <td style="padding: 6px 0;"><?php echo e($user->alamat ?? '-'); ?></td>
        </tr>
    </table>

    <div style="text-align: right; margin-top: 20px;">
        <a href="<?php echo e(route('profil.edit')); ?>"
           style="background: #1a6fd4; color: #fff; border-radius: 6px; padding: 8px 28px; font-size: 14px; font-weight: 600; text-decoration: none;">
            Edit
        </a>
    </div>
</div>


<h2 style="font-size: 20px; font-weight: 700; color: #222; margin-bottom: 16px;">Ubah kata sandi</h2>

<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 4px rgba(0,0,0,0.08);">
    <form action="<?php echo e(route('profil.password')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Masukkan Kata Sandi</label>
            <input type="password"
                   name="current_password"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="<?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color: #dc3545;"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Masukkan Kata Sandi Baru</label>
            <input type="password"
                   name="password"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color: #dc3545;"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Konfirmasi Kata Sandi Baru</label>
            <input type="password"
                   name="password_confirmation"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;">
        </div>

        <div style="text-align: right;">
            <button type="submit"
                    style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 10px 35px; font-size: 14px; font-weight: 600; cursor: pointer;">
                Simpan
            </button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PKK\resources\views/backend/profil/index.blade.php ENDPATH**/ ?>