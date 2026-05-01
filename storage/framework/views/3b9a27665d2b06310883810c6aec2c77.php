

<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="row mb-4">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Berita</h6>
                        <h2 class="mb-0" style="color: #0066cc; font-weight: 600;"><?php echo e($totalBerita); ?></h2>
                    </div>
                    <div style="font-size: 48px; color: #0066cc; opacity: 0.2;">
                        <i class="bi bi-newspaper"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Pengumuman</h6>
                        <h2 class="mb-0" style="color: #28a745; font-weight: 600;"><?php echo e($totalPengumuman); ?></h2>
                    </div>
                    <div style="font-size: 48px; color: #28a745; opacity: 0.2;">
                        <i class="bi bi-megaphone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <h3 class="mb-3" style="color: #333; font-weight: 600;">Berita Terbaru</h3>
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <?php if($beritaTerbaru->count() > 0): ?>
                    <div class="list-group list-group-flush">
                        <?php $__currentLoopData = $beritaTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('berita.show', $item->id)); ?>" class="list-group-item list-group-item-action border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1" style="color: #333;"><?php echo e($item->judul); ?></h6>
                                        <small class="text-muted"><?php echo e($item->created_at->format('d M Y')); ?></small>
                                    </div>
                                    <i class="bi bi-chevron-right text-muted"></i>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <p class="text-muted text-center py-4">Belum ada berita</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h3 class="mb-3" style="color: #333; font-weight: 600;">Pengumuman Terbaru</h3>
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <?php if($pengumumanTerbaru->count() > 0): ?>
                    <div class="list-group list-group-flush">
                        <?php $__currentLoopData = $pengumumanTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('pengumuman.show', $item->id)); ?>" class="list-group-item list-group-item-action border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1" style="color: #333;"><?php echo e($item->judul); ?></h6>
                                        <small class="text-muted"><?php echo e($item->tanggal->format('d M Y')); ?></small>
                                    </div>
                                    <i class="bi bi-chevron-right text-muted"></i>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <p class="text-muted text-center py-4">Belum ada pengumuman</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PKK\resources\views/dashboard.blade.php ENDPATH**/ ?>