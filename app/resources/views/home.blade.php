@extends('template.home')

@section('container')
    {{-- statistic --}}
    <div class="container text-center ">
        <h2 class="fw-bold mt-5 fs-1">STATISTIK HINGGA MARET 2023</h2>
        <div class="row align-items-start mt-3 mb-5">
            <div class="col-lg-3 p-3">
                <h3 class="text-danger fs-2 fw-bold" >635+</h3>
                <h5>Desain</h5>
            </div>
            <div class="col-lg-3 p-3">
                <h3 class="text-danger fs-2 fw-bold">55+</h3>
                <h5>Project Desain</h5>
            </div>
            <div class="col-lg-3 p-3">
                <h3 class="text-danger fs-2 fw-bold">30+</h3>
                <h5>Kota</h5>
            </div>
            <div class="col-lg-3 p-3">
                <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
            </div>
        </div>
    </div>

    {{-- why must us ? --}}
    <div class="container mt-5">
        <div class="row align-items-start mt-5">
            <div class="col-lg-6 p-3">
                <img src="./images/square-desain-murah-id.jpg" alt="desain murah id poster" class="rounded-3">
            </div>
            <div class="col-lg-6 p-3">
                <h6 class="text-uppercase">Desainmurah.id</h6>
                <h3 class="mt-3">Kenapa Harus Desainmurah.id</h3>
                <ul class="mt-4">
                    <li>
                        <p class="fs-5">Mempunyai identitas & legalitas perusahaan yang jelas, sehingga anda tidak perlu khawatir berkonsultasi dengan Tim kami</p>
                    </li>
                    <li>
                        <p class="fs-5">Tim Arsitek & Estimator yang profesional</p>
                    </li>
                    <li>
                        <p class="fs-5">Fleksibel, kami siap melayani konsultasi anda baik secara online atau tatap muka langsung di kantor kami.</p>
                    </li>
                    <li>
                        <p class="fs-5">Garansi kepuasan Anda, A design you love, revisi desain tidak terbatas.</p>
                    </li>
                </ul>
                <button class="btn btn-success px-3 rounded-5 mt-3"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
            </div>
        </div>
    </div>

    {{-- layanan jasa --}}
    <div class="container mt-5">
        <h2 class="text-uppercase text-center fw-bold">Layanan Jasa</h2>

        <div class="row text-center mt-5">
            <div class="col-lg-4">
                {{-- <img src="./images/desain-interior.jpg" alt="desain-interior"> --}}
                <i class="bi bi-house-heart fs-1"></i>
                <h6>Desain Interior</h6>
            </div>
            <div class="col-lg-4">
                <i class="bi bi-house-gear fs-1"></i>
                <h6>Desain Eksterior</h6>
            </div>
            <div class="col-lg-4">
                <i class="bi bi-map fs-1"></i>
                <h6>Denah</h6>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-lg-4">
                    <i class="bi bi-laptop fs-1"></i>
                    <h6>Desain 2D & 3D</h6>
                </div>
                <div class="col-lg-4">
                    <i class="bi bi-file-earmark-text fs-1"></i>
                    <h6>Rencana Anggaran Biaya (RAB)</h6>
                </div>
                <div class="col-lg-4">
                    <i class="bi bi-person-video3 fs-1"></i>
                    <h6>Custom</h6>
                </div>
            </div>
        </div>
    </div>
@endsection