@extends('layouts.main')

@section('container')
<body class="login">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <div class="card-title text-center mb-5 fw-light fs-5"> 
                <i class="fas fa-users fa-2x mb-2"></i>
                 <h5> Selamat Datang Warga RT 01 </h5>
                </div>
                  @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif

                  @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session('error') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
              <form action="/login" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="email">
                  <label for="email">Masukan Email Anda</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <label for="email">Kata Sandi</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Masuk</button>
                </div>
              </form>
                <hr class="my-4">
                <div class="d-grid mb-2">
                  <a href="/register" class="btn btn-register btn-login text-uppercase fw-bold" type="submit"> Belum Terdaftar? Daftar Disini!
                  </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection