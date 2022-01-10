@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Profil Saya</h1>
    </div>

    <form action="/profil/{{ $profils->id }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-md-4">
              <div class="mb-3">
                <label for="" class="fw-bold">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ $profils->nama }}" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="" class="fw-bold">Pekerjaan Utama</label>
                <input type="text" name="pekerjaan_utama" value="{{ $profils->pekerjaan_utama }}" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="" class="fw-bold">Pekerjaan Sampingan</label>
                <input type="text" name="pekerjaan_sampingan" value="{{ $profils->pekerjaan_sampingan }}" class="form-control" required>
              </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="" class="fw-bold">Tentang Saya</label>
                <textarea name="tentang_saya" id="" cols="30" rows="10" class="form-control" required>{{ $profils->tentang_saya }}</textarea>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="fw-bold">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="10" class="form-control" required>{{ $profils->alamat }}</textarea>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="fw-bold">Pesan Singkat</label>
                <textarea name="pesan_singkat" id="" cols="30" rows="10" class="form-control" required>{{ $profils->pesan_singkat }}</textarea>
              </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="fw-bold">Tiktok</label>
                <input type="text" name="email" value="{{ $profils->email }}" class="form-control" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="fw-bold">Whatsapp</label>
                <input type="text" name="whatsapp" value="{{ $profils->whatsapp }}" class="form-control" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="fw-bold">Instagram</label>
                <input type="text" name="instagram" value="{{ $profils->instagram }}" class="form-control" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="fw-bold">Facebook</label>
                <input type="text" name="facebook" value="{{ $profils->facebook }}" class="form-control" required>
              </div>
            </div>
          </div>
      
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-danger" type="button"><a href="/dashboard_admin" class="text-decoration-none text-white"><i class="bi bi-arrow-left-square"></i>&nbsp; <b>Kembali</b></a></button>
              <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i>&nbsp; <b>Simpan</b></button>
          </div>
    </form>
  </main>
@endsection