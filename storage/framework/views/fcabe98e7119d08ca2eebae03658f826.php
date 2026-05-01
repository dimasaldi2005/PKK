

<?php $__env->startSection('title', 'Pengumuman'); ?>

<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 24px;">
    <h2 style="font-size: 22px; font-weight: 700; color: #1a1a1a; margin: 0;">Tambahkan Pengumuman Baru</h2>
</div>

<?php if(session('success')): ?>
    <div style="background: #d4edda; border: 1px solid #c3e6cb; border-radius: 8px; padding: 14px 16px; margin-bottom: 20px; color: #155724; font-size: 14px;">
        <i class="bi bi-check-circle" style="margin-right: 8px;"></i><?php echo e(session('success')); ?>

    </div>
<?php endif; ?>


<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); margin-bottom: 30px; border: 1px solid #f0f0f0;">
    <form action="<?php echo e(route('pengumuman.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px; font-weight: 500;">Judul :</label>
            <input type="text" name="judul" value="<?php echo e(old('judul')); ?>" placeholder="Masukkan judul"
                   style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="<?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545;"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px; font-weight: 500;">Deskripsi :</label>
            <textarea name="deskripsi" placeholder="Masukkan deskripsi pengumuman"
                      style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none; min-height: 120px; resize: vertical; font-family: inherit;"
                      class="<?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('deskripsi')); ?></textarea>
            <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545;"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px; font-weight: 500;">Tempat :</label>
            <input type="text" name="tempat" value="<?php echo e(old('tempat')); ?>" placeholder="Masukkan tempat"
                   style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="<?php $__errorArgs = ['tempat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['tempat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545;"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px; font-weight: 500;">Tanggal :</label>
            <input type="date" name="tanggal" value="<?php echo e(old('tanggal')); ?>"
                   style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="<?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545;"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="text-align: right;">
            <button type="submit" style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 10px 35px; font-size: 14px; font-weight: 600; cursor: pointer;">
                Kirim
            </button>
        </div>
    </form>
</div>


<h3 style="font-size: 18px; font-weight: 700; color: #1a1a1a; margin-bottom: 16px;">Daftar Pengumuman</h3>

<div style="background: #fff; border-radius: 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); margin-bottom: 25px; border: 1px solid #e8e8e8; overflow: hidden;">
    <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <thead>
            <tr style="border-bottom: 2px solid #e0e0e0;">
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 55px;">No</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222;">Judul</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222;">Deskripsi</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 130px;">Tempat</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 120px;">Tanggal</th>
                <th style="padding: 16px 20px; width: 90px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr style="border-bottom: 1px solid #eeeeee;">
                <td style="padding: 16px 20px; color: #333;"><?php echo e($loop->iteration); ?></td>
                <td style="padding: 16px 20px; color: #333; font-weight: 500;"><?php echo e($item->judul); ?></td>
                <td style="padding: 16px 20px; color: #555;"><?php echo e(Str::limit($item->deskripsi, 60)); ?></td>
                <td style="padding: 16px 20px; color: #555;"><?php echo e($item->tempat); ?></td>
                <td style="padding: 16px 20px; color: #555; font-size: 13px;"><?php echo e($item->tanggal->format('d M Y')); ?></td>
                <td style="padding: 16px 20px;">
                    <div style="display: flex; gap: 8px;">
                        <a href="<?php echo e(route('pengumuman.edit', $item->id)); ?>"
                           style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #28a745; color: white; border-radius: 6px; text-decoration: none;">
                            <i class="bi bi-pencil-fill" style="font-size: 13px;"></i>
                        </a>
                        <form action="<?php echo e(route('pengumuman.destroy', $item->id)); ?>" method="POST" style="margin: 0;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Hapus pengumuman ini?')"
                                    style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #dc3545; color: white; border: none; border-radius: 6px; cursor: pointer;">
                                <i class="bi bi-trash-fill" style="font-size: 13px;"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="6" style="padding: 50px 20px; text-align: center; color: #aaa;">
                    <i class="bi bi-inbox" style="font-size: 40px; display: block; margin-bottom: 12px;"></i>
                    Belum ada data pengumuman
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php if($pengumuman instanceof \Illuminate\Pagination\LengthAwarePaginator && $pengumuman->hasPages()): ?>
    <div class="d-flex justify-content-center mt-4"><?php echo e($pengumuman->links()); ?></div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PKK\resources\views/frontend/pengumuman/index.blade.php ENDPATH**/ ?>