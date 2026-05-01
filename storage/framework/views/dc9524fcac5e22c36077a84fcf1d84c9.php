

<?php $__env->startSection('title', 'Tanda Tangan'); ?>

<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 24px;">
    <h2 style="font-size: 22px; font-weight: 700; color: #1a1a1a; margin: 0;">Input Tanda Tangan Ketua</h2>
</div>

<?php if(session('success')): ?>
    <div style="background: #d4edda; border: 1px solid #c3e6cb; border-radius: 8px; padding: 14px 16px; margin-bottom: 20px; color: #155724; font-size: 14px;">
        <i class="bi bi-check-circle" style="margin-right: 8px;"></i><?php echo e(session('success')); ?>

    </div>
<?php endif; ?>


<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); margin-bottom: 30px; border: 1px solid #f0f0f0;">
    <form action="<?php echo e(route('tanda-tangan.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Nama Terang :</label>
            <input type="text" name="nama_terang" value="<?php echo e(old('nama_terang')); ?>"
                   style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="<?php $__errorArgs = ['nama_terang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['nama_terang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545;"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Jabatan :</label>
            <select name="jabatan"
                    style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; background: #fff; outline: none;"
                    class="<?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <option value="">--Pilih--</option>
                <option value="ketua"       <?php echo e(old('jabatan') == 'ketua'       ? 'selected' : ''); ?>>Ketua</option>
                <option value="sekretaris"  <?php echo e(old('jabatan') == 'sekretaris'  ? 'selected' : ''); ?>>Sekretaris</option>
                <option value="wakil_ketua" <?php echo e(old('jabatan') == 'wakil_ketua' ? 'selected' : ''); ?>>Wakil Ketua</option>
            </select>
            <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545;"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">PokJa :</label>
            <select name="pokja"
                    style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; background: #fff; outline: none;"
                    class="<?php $__errorArgs = ['pokja'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <option value="">--Pilih--</option>
                <option value="bidang_umum"      <?php echo e(old('pokja') == 'bidang_umum'      ? 'selected' : ''); ?>>Bidang Umum</option>
                <option value="kelompok_kerja_1" <?php echo e(old('pokja') == 'kelompok_kerja_1' ? 'selected' : ''); ?>>Kelompok Kerja 1</option>
                <option value="kelompok_kerja_2" <?php echo e(old('pokja') == 'kelompok_kerja_2' ? 'selected' : ''); ?>>Kelompok Kerja 2</option>
                <option value="kelompok_kerja_3" <?php echo e(old('pokja') == 'kelompok_kerja_3' ? 'selected' : ''); ?>>Kelompok Kerja 3</option>
                <option value="kelompok_kerja_4" <?php echo e(old('pokja') == 'kelompok_kerja_4' ? 'selected' : ''); ?>>Kelompok Kerja 4</option>
            </select>
            <?php $__errorArgs = ['pokja'];
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


<h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 16px;">Daftar Tanda Tangan</h3>

<div style="background: #fff; border-radius: 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); border: 1px solid #e8e8e8; overflow: hidden;">
    <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <thead>
            <tr style="border-bottom: 2px solid #e0e0e0;">
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 55px;">No</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222;">Nama Terang</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 130px;">Jabatan</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 160px;">Pokja</th>
                <th style="padding: 16px 20px; width: 90px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr style="border-bottom: 1px solid #eeeeee;">
                <td style="padding: 16px 20px; color: #333;"><?php echo e($index + 1); ?></td>
                <td style="padding: 16px 20px; color: #333;">
                    <?php echo e(strlen($item->nama_terang) > 28 ? substr($item->nama_terang, 0, 28).'...' : $item->nama_terang); ?>

                </td>
                <td style="padding: 16px 20px; color: #333;"><?php echo e($item->getJabatanLabel()); ?></td>
                <td style="padding: 16px 20px; color: #333;"><?php echo e($item->getPokjaLabel()); ?></td>
                <td style="padding: 16px 20px;">
                    <div style="display: flex; gap: 8px;">
                        <a href="<?php echo e(route('tanda-tangan.edit', $item->id)); ?>"
                           style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #28a745; color: white; border-radius: 6px; text-decoration: none;">
                            <i class="bi bi-pencil-fill" style="font-size: 13px;"></i>
                        </a>
                        <form action="<?php echo e(route('tanda-tangan.destroy', $item->id)); ?>" method="POST" style="margin: 0;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Hapus data ini?')"
                                    style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #dc3545; color: white; border: none; border-radius: 6px; cursor: pointer;">
                                <i class="bi bi-trash-fill" style="font-size: 13px;"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5" style="padding: 50px 20px; text-align: center; color: #aaa;">
                    <i class="bi bi-inbox" style="font-size: 40px; display: block; margin-bottom: 12px;"></i>
                    Belum ada data tanda tangan
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PKK\resources\views/frontend/tanda-tangan/index.blade.php ENDPATH**/ ?>