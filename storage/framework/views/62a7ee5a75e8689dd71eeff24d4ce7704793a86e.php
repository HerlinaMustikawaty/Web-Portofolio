

<?php $__env->startSection('content'); ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Email Masuk</h1>
    </div>

    <?php if(session()->has('destroy')): ?>
          <div class="alert alert-danger" role="alert">
              <?php echo e(session('destroy')); ?>

          </div>
      <?php endif; ?>

    <div class="container col-md-10">
        <table class="table table-striped text-center">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Alat</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $kontaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php
                  $jumlah_kecamatan = count($kontaks);
              ?>
              
              <?php if($jumlah_kecamatan == 0): ?>
              <tr>
                    <th colspan="4" class="text-center">Belum ada email masuk</th>
              </tr> 
              <?php else: ?>
              <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td class="fw-bold"><?php echo e($kontak->email); ?></td>
                <td class="fw-bold"><?php echo e($kontak->subject); ?></td>
                <td>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lihatEmail<?php echo e($kontak->id); ?>" title="Lihat Email"><i class="bi bi-eye-fill"></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="lihatEmail<?php echo e($kontak->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal Lihat Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="fw-bold">Pengirim</h5>
                                            <p><?php echo e($kontak->email); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="fw-bold">Subject</h5>
                                            <p><?php echo e($kontak->subject); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <h5 class="fw-bold">Isi Email</h5>
                                            <p><?php echo e($kontak->message); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                    <form action="/contact/<?php echo e($kontak->id); ?>" method="post" class="d-inline">
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\joki\portofolio-herlina\resources\views/dashboard/kontak/index.blade.php ENDPATH**/ ?>