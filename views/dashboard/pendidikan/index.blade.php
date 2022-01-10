@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Pendidikan Saya</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('destroy'))
          <div class="alert alert-danger" role="alert">
              {{ session('destroy') }}
          </div>
      @endif

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
              @foreach ($pendidikans as $pendidikan)

              @php
                  $jumlah_kecamatan = count($pendidikans);
              @endphp
              
              @if ($jumlah_kecamatan == 0)
              <tr>
                <td scope="row" colspan="5" class="text-center">Belum ada data pendidikan</td>
              </tr> 
              @else
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pendidikan->nama_institut }}</td>
                <td>{{ $pendidikan->tahun_mulai }}</td>
                <td>{{ $pendidikan->tahun_lulus }}</td>
                <td>
                    <form action="/pendidikan/{{ $pendidikan->id }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-white" title="Hapus Data" onclick="return confirm('Data ini akan dihapus! Anda yakin untuk menghapus data ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
              </tr>
              @endif

              @endforeach
            </tbody>
        </table>
    </div>
  </main>
@endsection