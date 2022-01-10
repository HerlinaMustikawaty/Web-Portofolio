

<?php $__env->startSection('content'); ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Profil Saya</h1>
    </div>

    <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="" class="fw-bold">Nama Lengkap</label>
          <input type="text" readonly name="nama" value="<?php echo e($profils->nama); ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="" class="fw-bold">Pekerjaan Utama</label>
          <input type="text" readonly name="pekerjaan_utama" value="<?php echo e($profils->pekerjaan_utama); ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="" class="fw-bold">Pekerjaan Sampingan</label>
          <input type="text" readonly name="pekerjaan_sampingan" value="<?php echo e($profils->pekerjaan_sampingan); ?>" class="form-control">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="" class="fw-bold">Tentang Saya</label>
          <textarea readonly name="tentang_saya" id="" cols="30" rows="10" class="form-control"><?php echo e($profils->tentang_saya); ?></textarea>
        </div>
      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="" class="fw-bold">Alamat</label>
          <textarea readonly name="alamat" id="" cols="30" rows="10" class="form-control"><?php echo e($profils->alamat); ?></textarea>
        </div>
      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="" class="fw-bold">Pesan Singkat</label>
          <textarea readonly name="pesan_singkat" id="" cols="30" rows="10" class="form-control"><?php echo e($profils->pesan_singkat); ?></textarea>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="mb-3">
          <label for="" class="fw-bold">Tiktok</label>
          <input type="text" readonly name="email" value="<?php echo e($profils->email); ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="" class="fw-bold">Whatsapp</label>
          <input type="text" readonly name="whatsapp" value="<?php echo e($profils->whatsapp); ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="" class="fw-bold">Instagram</label>
          <input type="text" readonly name="instagram" value="<?php echo e($profils->instagram); ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="" class="fw-bold">Facebook</label>
          <input type="email" readonly name="email" value="<?php echo e($profils->facebook); ?>" class="form-control">
        </div>
      </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-warning" type="button"><a href="/profil/<?php echo e(1); ?>}}/edit" class="text-decoration-none text-white"><i class="bi bi-pencil-square"></i>&nbsp; <b>Edit Profil</b></a></button>
    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\joki\portofolio-herlina\resources\views/dashboard/index.blade.php ENDPATH**/ ?>