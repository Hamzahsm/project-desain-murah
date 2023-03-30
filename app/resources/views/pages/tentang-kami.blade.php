@extends('template.home')
@section('container')
    {{-- jumbo tron --}}
    <img src="images/jumbo-tron-desainmurah-id.jpg" alt="desain murah id header" class="img-fluid rounded" width="100%" >

    {{-- container --}}
    <div class="container mt-5">
        <h1 class="text-uppercase text-center">Tentang Kami</h1>
        <p class="mt-5">Desainmurah.id adalah penyedia layanan jasa desain arsitek rumah mewah, rumah minimalis, rumah perbidabatan atau custom. Desainmurah.id adalah anak usaha dari <a href="https://griyabangunindonesia.com" target="_blank">Griya Bangun Indonesia.</a>  Untuk mengetahui lebih lanjut tentang Griya Bangun Indonesia telah kami lampirkan pada video di bawah ini.</p>
        <div class="text-center my-5">
            <iframe width="420" height="315"
              src="https://www.youtube.com/embed/xwORLHO5IVo">
            </iframe>
        </div>
        <hr>
    </div>

    <div class="container text-center atas">
        <h2 class="fw-bold mt-5 fs-1">STATISTIK</h2>
        <div class="row align-items-start mt-3 mb-5">
            <div class="col-lg-3 p-3">
                <h3 class="text-danger fs-2 fw-bold" id="counter-1" >635+</h3>
                <h5>Desain</h5>
            </div>
            <div class="col-lg-3 p-3">
                <h3 class="text-danger fs-2 fw-bold" id="counter-2">55+</h3>
                <h5>Project Desain</h5>
            </div>
            <div class="col-lg-3 p-3">
                <h3 class="text-danger fs-2 fw-bold" id="counter-3">30+</h3>
                <h5>Kota</h5>
            </div>
            <div class="col-lg-3 p-3">
                <a href="https://wa.link/1a5pi5" target="_blank">
                    <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                </a>
            </div>
        </div>
    </div> 


    <div class="container atas">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-uppercase text-center">Visi</h2>
            </div>
            <div class="col-lg-6">
                <h6 class="text-uppercase text-center">Menjadi wasilah rezeki bagi banyak manusia dan menjadi kebanggaan bangsa dalam pembangunan negeri.</h6>
            </div>
        </div>
        <hr>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-uppercase text-center">Misi</h2>
            </div>
            <div class="col-lg-6">
                <h6 class="text-uppercase text-center">Pelayanan dan produk berbasis teknologi 4.0 mengutamakan pelayanan percepatan, ketepatan dan esfisiensi.</h6>
            </div>
        </div>
        <hr>
    </div>

@endsection