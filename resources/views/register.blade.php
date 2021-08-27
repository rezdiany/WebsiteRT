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
              <form action="/register" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Nama Lengkap</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating mb-3">
                    <input type="tel" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" id="no_telpon" placeholder="No Telpon" required value="{{ old('no_telpon') }}">
                    <label for="no_telpon">Nomer Telpon</label>
                    @error('no_telpon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                  <label for="email">Masukan Email Anda</label>
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                  <label for="password">Kata Sandi</label>
                  @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Daftar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection