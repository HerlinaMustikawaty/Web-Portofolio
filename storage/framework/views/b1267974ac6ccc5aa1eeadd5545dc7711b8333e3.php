

<?php $__env->startSection('content'); ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Pendidikan Saya</h1>
    </div>

    <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="/pendidikan" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="" class="fw-bold">Nama Institut</label>
                    <input type="text" name="nama_institut" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="" class="fw-bold">Tahun Mulai</label>
                    <input type="text" name="tahun_mulai" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="" class="fw-bold">Tahun Lulus</label>
                    <input type="text" name="tahun_lulus" class="form-control">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-dark" type="button"><a href="/pendidikan" class="text-decoration-none text-white"><i class="bi bi-arrow-left-square"></i>&nbsp; <b>Kembali</b></a></button>
            <button class="btn btn-primary" type="submit"><i class="bi bi-plus-square-fill"></i>&nbsp; <b>Tambah</b></button>
        </div>
    </form>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\joki\portofolio-herlina\resources\views/dashboard/pendidikan/create.blade.php ENDPATH**/ ?>