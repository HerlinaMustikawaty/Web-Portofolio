@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Email Masuk</h1>
    </div>

    @if (session()->has('destroy'))
          <div class="alert alert-danger" role="alert">
              {{ session('destroy') }}
          </div>
      @endif

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
              @foreach ($kontaks as $kontak)

              @php
                  $jumlah_kecamatan = count($kontaks);
              @endphp
              
              @if ($jumlah_kecamatan == 0)
              <tr>
                    <th colspan="4" class="text-center">Belum ada email masuk</th>
              </tr> 
              @else
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="fw-bold">{{ $kontak->email }}</td>
                <td class="fw-bold">{{ $kontak->subject }}</td>
                <td>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lihatEmail{{ $kontak->id }}" title="Lihat Email"><i class="bi bi-eye-fill"></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="lihatEmail{{ $kontak->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                            <p>{{ $kontak->email }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="fw-bold">Subject</h5>
                                            <p>{{ $kontak->subject }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <h5 class="fw-bold">Isi Email</h5>
                                            <p>{{ $kontak->message }}</p>
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
                    <form action="/contact/{{ $kontak->id }}" method="post" class="d-inline">
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