@extends('template.home')
@section('container')

    <div class="container mt-5">
        <h2 class="text-center text-uppercase fw-bold">Harga Desain</h2>
        <p class="text-center my-3">Harga desain sangat berguna untuk menyesuaikan budget Anda : </p>
        <div class="row my-5">
            {{-- paket satu --}}
            <div class="col-lg-3 mt-4">
                <div class="border border-2 p-3 rounded shadow"> 
                    <h2 class="text-uppercase">Basic</h2>
                    <hr>
                    <h4>Rp. 25.000 / m<sup>2</sup></h4>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Denah</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Tampak</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Potongan</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Pondasi</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Atap</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Plafon</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Balok & Kolom</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Titik Lampu</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Sanitasi & Drainase</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Penulangan & Plat Lantai</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Desain Struktur dan Arsitektural</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> 3D Desain</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Anggaran Biaya (RAB)</p>
                    <div class="text-center mt-4">
                        <a href="#">
                            <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
            </div>
            {{-- paket 2 --}}
            <div class="col-lg-3 mt-4">
                <div class="border border-2 p-3 rounded shadow">
                    <h2 class="text-uppercase">Advanced</h2>
                    <hr>
                    <h4>Rp. 30.000 / m<sup>2</sup></h4>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Denah</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Tampak</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Potongan</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Pondasi</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Atap</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Plafon</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Balok & Kolom</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Titik Lampu</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Sanitasi dan Drainase</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Penulangan & Plat Lantai</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Desain Struktur & Arsitektural</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> 3D Desain</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Anggaran Biaya (RAB)</p>
                    <div class="text-center mt-4">
                        <a href="#">
                            <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
            </div>

            {{-- paket 3 --}}
            <div class="col-lg-3 mt-4">
                <div class="border border-2 p-3 rounded shadow bg-primary text-white">
                    <h2 class="text-uppercase">Standard <span class="badge rounded-pill text-bg-danger">Best</span></h2>
                    <hr>
                    <h4>Rp. 50.000 / m<sup>2</sup></h4>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Denah</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Tampak</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Potongan</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Rencana Pondasi</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Rencana Atap</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Rencana Plafon</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Rencana Balok & Kolom</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Rencana Titik Lampu</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Rencana Sanitasi dan Drainase</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Rencana Penulangan & Plat Lantai</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> Desain Struktur & Arsitektural</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-warning"></i> 3D Desain</p>
                    <p class="mt-3"><i class="bi bi-x fw-bold text-danger"></i> Rencana Anggaran Biaya (RAB)</p>
                    <div class="text-center mt-4">
                        <a href="#">
                            <button class="btn btn-danger px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
            </div>

            {{-- paket 4 --}}
            <div class="col-lg-3 mt-4">
                <div class="border border-2 p-3 rounded shadow">
                    <h2 class="text-uppercase">Premium</h2>
                    <hr>
                    <h4>Rp. 75.000 / m<sup>2</sup></h4>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Denah</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Tampak</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Potongan</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Pondasi</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Atap</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Plafon</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Balok & Kolom</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Titik Lampu</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Sanitasi dan Drainase</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Penulangan & Plat Lantai</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Desain Struktur & Arsitektural</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> 3D Desain</p>
                    <p class="mt-3"><i class="bi bi-check-lg fw-bold text-success"></i> Rencana Anggaran Biaya (RAB)</p>
                    <div class="text-center mt-4">
                        <a href="#">
                            <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container atas mt-5">
        <h2 class="text-uppercase text-center atas">Apakah Boleh Nego Harga ?</h2>
        <p class="mt-3">Berminat menggunakan jasa desainmurah.id tapi terkendala masalah budget. Tenang saja, mari bicarakan dan konsultasikan keinginan desain rumah Anda bersama kami.</p>
        <div class="text-center mt-5">
            <a href="https://wa.link/1a5pi5" target="_blank">
                <button class="btn btn-success px-3 rounded-5 shadow"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
            </a>
        </div>
    </div>
@endsection