@extends('admin.template.home')
@section('container-admin')

<div class="container-fluid">
    <div class="row">
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-4 border-bottom">
          <h3 class="text-uppercae text-secondary">Dashboard</h3>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <a href="/daftar-marketing" class="text-decoration-none">
                          <div class="card shadow ">
                            <div class="card-body">
                              <h5 class="card-text text-secondary text-uppercase"> <i class="bi bi-file-earmark-text"></i> Marketing</h5>
                            </div>
                          </div>
                        </a> 
                    </div>
                    <div class="col">
                        <a href="/admin-cek-user" class="text-decoration-none">
                          <div class="card shadow">
                            <div class="card-body">
                              <h5 class="card-text text-secondary text-uppercase"> <i class="bi bi-file-earmark-text"></i> Progress Desain</h5>
                            </div>
                          </div>
                        </a>
                    </div>
                    {{-- <div class="col">
                        <a href="/admin-cek-owner" class="text-decoration-none">
                          <div class="card">
                            <img src="images/logo.png" class="card-img-top" alt="produk satu">
                            <div class="card-body">
                              <h4 class="card-text text-dark">Owner</h4>
                              <p class="card-text text-muted">Cari tahu berapa banyak <span class="fw-bold">owner</span> yang terdaftar</p>
                            </div>
                          </div>
                        </a>
                    </div> --}}
                </div>
            </div>
      </main>
    </div>
</div>

@endsection