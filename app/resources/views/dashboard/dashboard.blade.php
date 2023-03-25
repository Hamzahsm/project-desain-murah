@extends('dashboard.template.home')
@section('container-dashboard')
{{-- table --}}
    <div class="container mt-5">
        {{-- table 1 --}}
        <p class="fw-bold"><i class="bi bi-currency-dollar"></i> KOMISI : <span class="text-danger"> {{ $user->name }}</span></p>
        <table class="table mt-3 table-hover table-bordered col-sm-6 shadow">
            <thead>
              <tr>
                <th scope="col">Jumlah Komisi</th>
                <th scope="col">Komisi Yang Bisa di Klaim</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody> 
              <tr>
                <td>{{ $user->komisi }}</td>
                <td>{{ $user->klaim }}</td>
                <td>
                    <a href="#"> Klaim Sekarang</a>
                </td>
              </tr>
            </tbody>
        </table>

        {{-- table 2 --}}
        <p class="mt-5 text-uppercase"><i class="bi bi-database-gear"></i> Progess Desain</p>
        <table class="table mt-3 table-hover table-bordered shadow">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Project</th>
                <th scope="col">Keterangan</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($clients as $client)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->keterangan }}</td>
              </tr> 
            </tbody>
            @endforeach
        </table>
    </div>

{{-- alur pelayanan desain --}}
<div class="container my-5 text-center">
    <div class="row">
        <div class="col-lg-6">
            <img src="../images/alur-pelayanan-2.png" alt="alur-pelayanan" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
            <p class="mt-3"> <i class="bi bi-chat-text"></i> Memiliki Pertanyaan Lain ? Hubungi Admin dibawah ini</p>
            <a href="#">
              <button class="btn btn-success"><i class="bi bi-whatsapp"></i> Chat Admin</button>
            </a>
        </div>
    </div>
</div>
@endsection  