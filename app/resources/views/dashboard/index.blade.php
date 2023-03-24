@extends('dashboard.template.home')
@section('container-dashboard')
{{-- table --}}
    <div class="container mt-5">
        {{-- table 1 --}}
        <p><i class="bi bi-currency-dollar"></i> KOMISI</p>
        <table class="table mt-3 table-hover table-bordered col-sm-6">
            <thead>
              <tr>
                <th scope="col">Jumlah Komisi</th>
                <th scope="col">Komisi Yang Bisa di Klaim</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Rp 1.500.000</th>
                <td>Rp 500.000</td>
                <td>
                    <a href="#">
                        <button class="btn btn-info"> <i class="bi bi-hand-index"></i> Klaim Sekarang</button>
                    </a>
                </td>
              </tr>
            </tbody>
        </table>

        {{-- table 2 --}}
        <p class="mt-5 text-uppercase"><i class="bi bi-database-gear"></i> Progess Desain</p>
        <table class="table mt-3 table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Project</th>
                <th scope="col">Keterangan</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Desain Rumah Bu Irma</td>
                <td>Selesai Dalam 5 Hari Lagi</td>
              </tr>
            </tbody>
        </table>
    </div>

{{-- alur pelayanan desain --}}
<div class="container my-5 text-center">
    <img src="images/alur-pelayanan.png" alt="alur-pelayanan" class="img-fluid rounded">
    <p class="mt-3">Memiliki Pertanyaan Lain ? Hubungi Admin dibawah ini</p>
    <a href="#">
      <button class="btn btn-success"><i class="bi bi-whatsapp"></i> Chat Admin</button>
    </a>
</div>
@endsection  