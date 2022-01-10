

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

    <?php if(session()->has('destroy')): ?>
          <div class="alert alert-danger" role="alert">
              <?php echo e(session('destroy')); ?>

          </div>
      <?php endif; ?>

    <div class="container col-md-10">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
            <a href="/pendidikan/create" class="text-decoration-none"><button class="btn btn-primary text-white btn-sm mx-auto"><b><i class="bi bi-plus"></i> Tambah Pendidikan</b></button></a>
        </div>
        <table class="table table-striped text-center">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Nama Institut</th>
                <th scope="col">Tahun Mulai</th>
                <th scope="col">Tahun Lulus</th>
                <th scope="col">Alat</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php
                  $jumlah_kecamatan = count($pendidikans);
              ?>
              
              <?php if($jumlah_kecamatan == 0): ?>
              <tr>
                <td scope="row" colspan="5" class="text-center">Belum ada data pendidikan</td>
              </tr> 
              <?php else: ?>
              <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e($pendidikan->nama_institut); ?></td>
                <td><?php echo e($pendidikan->tahun_mulai); ?></td>
                <td><?php echo e($pendidikan->tahun_lulus); ?></td>
                <td>
                    <form action="/pendidikan/<?php echo e($pendidikan->id); ?>" method="post" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger text-white" title="Hapus Data" onclick="return confirm('Data ini akan dihapus! Anda yakin untuk menghapus data ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
              </tr>
              <?php endif; ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\joki\portofolio-herlina\resources\views/dashboard/pendidikan/index.blade.php ENDPATH**/ ?>