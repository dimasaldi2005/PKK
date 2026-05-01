

<?php $__env->startSection('title', 'Galeri - Bidang Umum'); ?>

<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 30px;">
    <h2 style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin: 0;">Galeri Bidang Umum</h2>
    <p style="font-size: 14px; color: #666; margin: 6px 0 0 0;">Kelola galeri foto dan dokumentasi Bidang Umum</p>
</div>


<?php if(session('success')): ?>
    <div style="background: #d4edda; border: 1px solid #c3e6cb; border-radius: 8px; padding: 14px 16px; margin-bottom: 20px; color: #155724; font-size: 14px;">
        <i class="bi bi-check-circle" style="margin-right: 8px;"></i><?php echo e(session('success')); ?>

    </div>
<?php endif; ?>


<div style="background: #fff; border-radius: 10px; padding: 20px 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); margin-bottom: 25px; border: 1px solid #f0f0f0;">
    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
        <i class="bi bi-funnel" style="font-size: 18px; color: #1a6fd4;"></i>
        <h3 style="font-size: 15px; font-weight: 600; color: #333; margin: 0;">Filter Data</h3>
    </div>

    <form method="GET" action="<?php echo e(route('galeri.bidang-umum')); ?>" style="display: grid; grid-template-columns: 1fr 1fr 1fr auto auto; gap: 15px; align-items: flex-end;">
        <div>
            <label style="font-size: 13px; color: #555; display: block; margin-bottom: 6px; font-weight: 500;">Pilih Bulan</label>
            <select name="bulan" style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 9px 12px; font-size: 13px; background: #fff; outline: none; color: #333; transition: border-color 0.2s;">
                <option value="">Semua Bulan</option>
                <?php for($i = 1; $i <= 12; $i++): ?>
                    <option value="<?php echo e($i); ?>" <?php echo e(request('bulan') == $i ? 'selected' : ''); ?>>
                        <?php echo e(\Carbon\Carbon::createFromDate(2026, $i, 1)->format('F')); ?>

                    </option>
                <?php endfor; ?>
            </select>
        </div>

        <div>
            <label style="font-size: 13px; color: #555; display: block; margin-bottom: 6px; font-weight: 500;">Pilih Tahun</label>
            <select name="tahun" style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 9px 12px; font-size: 13px; background: #fff; outline: none; color: #333; transition: border-color 0.2s;">
                <option value="">Semua Tahun</option>
                <?php for($year = 2020; $year <= 2030; $year++): ?>
                    <option value="<?php echo e($year); ?>" <?php echo e(request('tahun') == $year ? 'selected' : ''); ?>><?php echo e($year); ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <div></div>

        <button type="submit" style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 9px 24px; font-size: 13px; font-weight: 600; cursor: pointer; transition: background 0.2s; display: flex; align-items: center; gap: 6px;">
            <i class="bi bi-search"></i> Filter
        </button>

        <a href="<?php echo e(route('galeri.bidang-umum')); ?>" style="background: #f0f0f0; color: #555; border-radius: 6px; padding: 9px 24px; font-size: 13px; font-weight: 600; text-decoration: none; transition: background 0.2s; display: flex; align-items: center; gap: 6px;">
            <i class="bi bi-arrow-clockwise"></i> Reset
        </a>
    </form>
</div>


<div style="background: #fff; border-radius: 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); margin-bottom: 25px; border: 1px solid #e8e8e8; overflow: hidden;">
    <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <thead>
            <tr style="border-bottom: 2px solid #e0e0e0;">
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 55px;">No</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 130px;">Gambar</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222;">Deskripsi</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 130px;">Tanggal</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 100px;">Status</th>
                <th style="padding: 16px 20px; width: 90px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr style="border-bottom: 1px solid #eeeeee;">
                <td style="padding: 18px 20px; color: #333; font-size: 15px;"><?php echo e($index + 1); ?></td>
                <td style="padding: 18px 20px;">
                    <?php if($item->gambar && file_exists(public_path('storage/' . $item->gambar))): ?>
                        <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="Gambar"
                             style="width: 90px; height: 65px; object-fit: cover; border-radius: 6px; background: #e0e0e0;">
                    <?php else: ?>
                        <div style="width: 90px; height: 65px; background: #d9d9d9; border-radius: 6px;"></div>
                    <?php endif; ?>
                </td>
                <td style="padding: 18px 20px; color: #333; line-height: 1.6;">
                    <?php echo e($item->deskripsi); ?>

                </td>
                <td style="padding: 18px 20px; color: #333; font-size: 13px; line-height: 1.6;">
                    <?php echo e($item->tanggal->format('Y-m-d')); ?><br><?php echo e($item->tanggal->format('H:i:s')); ?>

                </td>
                <td style="padding: 18px 20px; color: #333;"><?php echo e($item->status); ?></td>
                <td style="padding: 18px 20px;">
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <a href="<?php echo e(route('galeri.bidang-umum.edit', $item->id)); ?>"
                           style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #28a745; color: white; border-radius: 6px; text-decoration: none;">
                            <i class="bi bi-pencil-fill" style="font-size: 13px;"></i>
                        </a>
                        <form action="<?php echo e(route('galeri.bidang-umum.delete', $item->id)); ?>" method="POST" style="margin: 0;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit"
                                    onclick="return confirm('Hapus data ini?')"
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
                    Belum ada data galeri
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: space-between; align-items: center;">
    <div></div>
    <button style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 11px 28px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background 0.2s; display: flex; align-items: center; gap: 8px;">
        <i class="bi bi-download"></i> Unduh Laporan
    </button>
</div>

<style>
    select:hover {
        border-color: #1a6fd4;
    }

    button:hover {
        opacity: 0.9;
    }

    a:hover {
        opacity: 0.9;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PKK\resources\views/backend/galeri/bidang-umum.blade.php ENDPATH**/ ?>