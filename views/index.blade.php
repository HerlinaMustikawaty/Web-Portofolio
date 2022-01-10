<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- MyCSS -->
    <link rel="stylesheet" href="{{ asset('libraries/css/main.css') }}" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />

    <title>My Portofolio</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-3">
      <div class="container">
        <a class="navbar-brand nav-title" href="#">Portofolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item px-2">
              <a class="nav-link active nav-text" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link nav-text" href="#about">About</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link nav-text" href="#pendidikan">Pendidikan</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link nav-text" href="#kontak">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="section-header">
      <div class="container">
        <div class="text-center">
          <img src="{{ asset('libraries/image/pp.jpg') }}" class="img-fluid rounded-circle border border-5 mb-3" style="margin-top: 165px;" width="200" alt="">
          <h5 class="nama">{{ $profil->nama }}</h5>
          <p class="pekerjaan">{{ $profil->pekerjaan_utama }} | {{ $profil->pekerjaan_sampingan }}</p>
        </div>
      </div>
    </header>

    <!-- Aboutme -->
    <main>
      <section class="section-about-me" id="about">
        <div class="container">
          <div class="row">
            <h5 class="text-center about-title">ABOUT ME</h5>
            <div class="col-md-12 mt-4 d-flex justify-content-center">
              <div class="col-lg-8 d-flex justify-content-center">
                <p class="about-me">
                  {{ $profil->tentang_saya }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-project" id="pendidikan">
        <div class="container">
          <div class="row">
            <h5 class="text-center project-title">PENDIDIKAN</h5>
            @foreach ($pendidikans as $pendidikan)
                <!-- Start timeline item -->
                <div class="row">
                  <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                      <div class="col border-end border-3">&nbsp;</div>
                      <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                      <span class="badge rounded-circle bg-light border">&nbsp;</span>
                    </h5>
                    <div class="row h-50">
                      <div class="col border-end border-3">&nbsp;</div>
                      <div class="col">&nbsp;</div>
                    </div>
                  </div>
                  <div class="col py-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="float-end">{{ $pendidikan->tahun_mulai }} - {{ $pendidikan->tahun_lulus }}</div>
                        <h4 class="card-title text-muted">{{ $pendidikan->nama_institut }}</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End timeline item -->
            @endforeach
          </div>
        </div>


      </section>

      <section class="section-contact" id="kontak">
        <div class="container">
          <div class="row">
            <h5 class="contact-title text-center">CONTACT</h5>
            <div class="d-flex justify-content-center">
              <div class="col-lg-8">
                <form action="/contact" method="POST" style="margin-top: 103px">
                  @csrf
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label contact-text">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label contact-text">Subject</label>
                    <input type="text" class="form-control" name="subject" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label contact-text">Message</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-info">
        <div class="container">
          <div class="row">
            <h5 class="info-title text-center"></h5>
            <div class="col-md-4 text-center mb-5">
              <h5 class="alamat">ALAMAT</h5>
              <p>
                {{ $profil->alamat }}
              </p>
            </div>
            <div class="col-md-4 text-center mb-5">
              <h5 class="alamat">SOCIAL MEDIA</h5>
              <div>
                <a href="{{ $profil->whatsapp }}" class="text-decoration-none"><img src="{{ asset('/libraries/image/wa.png') }}" class="img-fluid mx-1" width="50" alt=""></a>
                <a href="{{ $profil->instagram }}" class="text-decoration-none"><img src="{{ asset('/libraries/image/instagram.png') }}" class="img-fluid mx-1" width="50" alt=""></a>
                <a href="{{ $profil->facebook }}" class="text-decoration-none"><img src="{{ asset('/libraries/image/facebook.png') }}" class="img-fluid mx-1" width="50" alt=""></a>
                <a href="{{ $profil->email }}" class="text-decoration-none"><img src="{{ asset('/libraries/image/tiktok.png') }}" class="img-fluid mx-1" width="50" alt=""></a>
              </div>
            </div>
            <div class="col-md-4 text-center mb-5">
              <h5 class="alamat">PESAN SINGKAT</h5>
              <p>
                {{ $profil->pesan_singkat }}
              </p>
            </div>
          </div>
        </div>
      </section>

      <footer class="section-footer border-top">
        <div class="container">
          <div class="row">
            <h5 class="footer text-center">Created with <i class="bi bi-heart-fill" style="color: red"></i> by Herlina Mustikawaty</h5>
          </div>
        </div>
      </footer>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (Session::has('success'))
     <script>
         Swal.fire({
           icon: 'success',
           title: '{!! session("success") !!}',
           showConfirmButton: false,
           timer: 4500
         })
     </script>
    @endif

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
