@extends('admin.template.home')
@section('container-admin')

<div class="container-fluid">
    <div class="row">
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-4 border-bottom">
          <h1 class="h2">Dashboard</h1>
            </div>
            <div class="container ">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <a href="/admin-cek-admin" class="text-decoration-none">
                          <div class="card">
                            <img src="images/logo.png" class="card-img-top" alt="produk satu">
                            <div class="card-body">
                              <h4 class="card-text text-dark">Admin</h4>
                              <p class="card-text text-muted">Cari tahu daftar penggunan yang menjadi <span class="fw-bold">admin</span></p>
                            </div>
                          </div>
                        </a> 
                    </div>
                    <div class="col">
                        <a href="/admin-cek-user" class="text-decoration-none">
                          <div class="card">
                            <img src="images/logo.png" class="card-img-top" alt="produk satu">
                            <div class="card-body">
                              <h4 class="card-text text-dark">User</h4>
                              <p class="card-text text-muted">Cari tahu berapa banyak <span class="fw-bold">user</span> yang tedaftar</p>
                            </div>
                          </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/admin-cek-owner" class="text-decoration-none">
                          <div class="card">
                            <img src="images/logo.png" class="card-img-top" alt="produk satu">
                            <div class="card-body">
                              <h4 class="card-text text-dark">Owner</h4>
                              <p class="card-text text-muted">Cari tahu berapa banyak <span class="fw-bold">owner</span> yang terdaftar</p>
                            </div>
                          </div>
                        </a>
                    </div>
                </div>
            </div>
      </main>
    </div>
</div>

@endsection