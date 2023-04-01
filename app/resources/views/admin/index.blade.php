@extends('admin.template.home')
@section('container-admin')

<div class="container-fluid ">
    <div class="rows">
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-4 border-bottom">
          <h3 class="text-uppercase text-secondary">Dashboard</h3>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <a href="/daftar-marketing" class="text-decoration-none text-secondary">
                          <div class="card shadow ">
                            <div class="card-body">
                              <h5 class="card-text text-uppercase"> <i class="bi bi-file-earmark-text"></i> Marketing</h5>
                              <h5 class="card-text mt-3"><i class="bi bi-person fs-4"></i> {{ $users->count() }} </h5>
                            </div>
                          </div>
                        </a> 
                    </div>
                    <div class="col">
                        <a href="/progress-desain" class="text-decoration-none text-secondary">
                          <div class="card shadow">
                            <div class="card-body">
                              <h5 class="card-text text-uppercase"> <i class="bi bi-file-earmark-text"></i> Progress Desain</h5>
                              <h5 class="card-text mt-3"><i class="bi bi-person fs-4"></i> {{ $clients->count() }}</h5>
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