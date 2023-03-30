@extends('dashboard.template.home')
@section('container-dashboard')
{{-- table --}}
    <div class="container mt-5">
        {{-- table 1 --}}
        <p class="fw-bold"><i class="bi bi-currency-dollar"></i> KOMISI </span></p>
        @if($user->komisi)
          Selamat datang, <strong> {{ $user->name }} !</strong>
        @else 
          <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
            <i class="bi bi-exclamation-triangle"></i> Oops, nampaknya belum ada komisi. <strong> Saatnya untuk dapatkan klien pertama!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <table class="table mt-4 table-hover table-bordered col-sm-6 shadow">
            <thead>
              <tr>
                <th scope="col">Jumlah Komisi</th>
                <th scope="col">Komisi Yang Bisa di Klaim</th>
                <th scope="col">Aksi</th>
                <th scope="col">Last Update</th>
              </tr>
            </thead>
            <tbody> 
              <tr>
                <td>{{ $user->komisi }}</td>
                <td>{{ $user->klaim }}</td>
                <td>
                  @if($user->komisi)
                    <a href="https://wa.link/mw8r93" class="nav-link text-success" target="_blank">
                      <i class="bi bi-hand-index-thumb"></i> Klaim Sekarang
                    </a>
                    @else 
                    <p class="text-danger fst-italic">tidak ada klien ,tidak ada komisi, tidak bisa melakukan klaim.</p>
                  @endif
                </td>
                <td>
                  @if($user->komisi)
                    {{ $user->updated_at }}
                  @else
                    <p class="text-danger fst-italic">Belum Pernah di Update</p>
                  @endif
                </td>
              </tr>
            </tbody>
        </table>

        <hr class="my-5">

        {{-- table 2 --}}
        <p class="mt-5 text-uppercase"><i class="bi bi-database-gear"></i> Progess Desain</p>
        <table class="table mt-3 table-hover table-bordered shadow">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Referral Code</th>
                <th scope="col">Klien</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Last Update</th>
              </tr>
            </thead>
            <tbody>
              @if ($clients->count())
                @foreach ($clients as $client)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $client->user->referral }}</td>
                    <td>{{ $client->name }}</td> 
                    <td>
                        {!! $client->keterangan !!} 
                    </td>
                    <td>
                      @if($client->updated_at)
                        {{ $client->updated_at }}
                      @else
                        <p class="text-danger fst-italic">Belum ada update</p>
                      @endif
                    </td>
                  </tr> 
                </tbody>
                  @endforeach
                  @else 
                  <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <i class="bi bi-exclamation-triangle"></i> Oops, belum ada progres desain sama sekali. <strong> Saatnya untuk dapatkan klien pertama!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
        </table>
        <hr class="my-5">
    </div> 

{{-- alur pelayanan desain --}}
<div class="container my-5 text-center">
    <div class="row">
        <div class="col-lg-6">
            <img src="../images/alur-pelayanan-2.png" alt="alur-pelayanan" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
            <h4 class="mt-5 text-uppercase fw-bold"><i class="bi bi-info-circle"></i> Pusat Bantuan</h4>
            <a href="https://wa.link/ts603h" class="nav-link mt-3" target="_blank">
              <button class="btn btn-info"><i class="bi bi-whatsapp"></i> Konsultasi Desain</button>
            </a>
            <a href="https://wa.link/ts603h" class="nav-link mt-3" target="_blank">
              <button class="btn btn-primary"><i class="bi bi-whatsapp"></i> Finishing</button>
            </a>
            <a href="https://wa.link/ts603h" class="nav-link mt-3" target="_blank">
              <button class="btn btn-success"><i class="bi bi-whatsapp"></i> Chat Admin</button>
            </a>
        </div>
    </div>
</div>
@endsection  