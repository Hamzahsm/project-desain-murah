@extends('template.home')

@section('container')
        {{-- alert --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>   
        @endif 

    {{-- carousel --}}
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <a href="https://wa.link/pvuit1" target="_blank">
                <img src="./images/slider-1.jpg" class="d-block w-100 img-responsive img-fluid" alt="slider satu">
            </a>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <a href="https://wa.link/pvuit1" target="_blank">
                <img src="./images/slider-2.jpg" class="d-block w-100 img-responsive img-fluid" alt="slider dua">
            </a>
          </div>
          <div class="carousel-item" data-bs-interval="2000"> 
            <a href="https://wa.link/pvuit1" target="_blank">
                <img src="./images/slider-3.jpg" class="d-block w-100 img-responsive img-fluid" alt="slider tiga">
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- statistic --}}
    <div class="container text-center atas">
        <h2 class="fw-bold mt-5 fs-1">STATISTIK HINGGA MARET 2023</h2>
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

    {{-- why must us ? --}}
    <div class="container mt-5 atas">
        <div class="row align-items-start mt-5 atas">
            <div class="col-lg-6 p-3 atas">
                <img src="./images/square-desain-murah-id.jpg" alt="desain murah id poster" class="rounded-3 img-fluid img-responsive">
            </div>
            <div class="col-lg-6 p-3 atas">
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
                <a href="https://wa.link/1a5pi5" target="_blank">
                    <button class="btn btn-success px-3 rounded-5 mt-3"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                </a>
            </div>
        </div>
    </div>

    {{-- layanan jasa --}}
    <div class="container mt-5 atas">
        <h2 class="text-uppercase text-center fw-bold atas">Layanan Jasa</h2>

        <div class="row text-center mt-2">
            <div class="col-lg-4 mt-4">
                <div class="border border-2 py-5 rounded shadow bg-body-secondary bg-gradient bg-opacity-50">
                    <a href="#" class="text-decoration-none text-secondary">
                        <i class="bi bi-house-heart fs-1"></i>
                        <h6>Desain Interior</h6>
                    </a>
                    <p>Mari buat desain interior sesuai keinginan untuk rumah mewah dan rumah minimalis.</p>
                    <a href="https://wa.link/1a5pi5" target="_blank">
                        <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="border border-2 py-5 rounded shadow bg-body-secondary bg-gradient bg-opacity-50">
                    <a href="#" class="text-decoration-none text-secondary">
                        <i class="bi bi-house-gear fs-1"></i>
                        <h6>Desain Eksterior</h6>
                    </a>
                    <p>Ciptakan desain eksterior rumah yang terlihat mewah ataupun minimalis untuk menciptakan kesan tertentu.</p>
                    <a href="https://wa.link/1a5pi5" target="_blank">
                        <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="border border-2 py-5 rounded shadow bg-body-secondary bg-gradient bg-opacity-50">
                    <a href="#" class="text-decoration-none text-secondary">
                        <i class="bi bi-map fs-1"></i>
                        <h6>Denah</h6>
                    </a>
                    <p>Bantu Kontraktor membangun lebih efektif dan efisien dengan membuat denah yang informatif.</p>
                    <a href="https://wa.link/1a5pi5" target="_blank">
                        <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="">
            <div class="row text-center">
                <div class="col-lg-4 mt-4">
                    <div class="border border-2 py-5 rounded shadow bg-body-secondary bg-gradient bg-opacity-50">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="bi bi-laptop fs-1"></i>
                            <h6>Desain 2D & 3D</h6>
                        </a>
                        <p>Model bangunan akan nampak lebih nyata dan lebih mudah dipahami bahkan oleh orang awam sekalipun.</p>
                        <a href="https://wa.link/1a5pi5" target="_blank">
                            <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="border border-2 py-5 rounded shadow bg-body-secondary bg-gradient bg-opacity-50">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="bi bi-file-earmark-text fs-1"></i>
                            <h6>Rencana Anggaran Biaya (RAB)</h6>
                        </a>
                        <p>Membuat Anggaran Pembangunan lebih maksimal, terarah dan terukur.</p>
                        <a href="https://wa.link/1a5pi5" target="_blank">
                            <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="border border-2 py-5 rounded shadow bg-body-secondary bg-gradient bg-opacity-50">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="bi bi-person-video3 fs-1"></i>
                            <h6>Custom</h6>
                        </a>
                        <p>Ingin melakukan custom order ? Mari sampaikan keiginan Anda melalui WhatsApp dibawah ini</p>
                        <a href="https://wa.link/1a5pi5" target="_blank">
                            <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tentang Kami --}}
    <div class="container mt-5 atas">
        <div class="text-center mt-5 atas">
            <h2 class="text-center text-uppercase atas fw-bold">Tentang Kami</h2>
            <p>Desainmurah.id merupakan bagian dari Griya Bangun Studio yang hadir sebagai rekan solusi kebutuhan desain dan arsitek professional dan terpercaya.</p>
        </div>
        <div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      NIB
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">NIB GRIYA BANGUN INDONESIA : 1002220047599</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      NPWP
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">NPWP GRIYA BANGUN INDONESIA : 62.239.319.5-654.000</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      AHU
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">AHU GRIYA BANGUN INDONESIA : AHU-0009656.AH.01.01.TAHUN2022</div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    {{-- harga desain --}}
    <div class="container mt-5 atas">
        <h2 class="text-center text-uppercase fw-bold atas">Pricelist</h2>
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
                        <a href="https://wa.link/1a5pi5" target="_blank">
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
                        <a href="https://wa.link/1a5pi5" target="_blank">
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
                        <a href="https://wa.link/1a5pi5" target="_blank">
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
                        <a href="https://wa.link/1a5pi5" target="_blank">
                            <button class="btn btn-success px-3 rounded-5"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- portofolio --}}
    <div class="container mt-5 atas">
        <h2 class="text-center fw-bold atas">PORTOFOLIO</h2>
        <div class="row mt-2">
            {{-- 1 --}}
            <div class="col-lg-4 mt-4">
                <img src="./images/portofolio/1.jpg" alt="portofolio-desainmurah.id" class="img-fluid img-responsive rounded shadow">
            </div>
            {{-- 2 --}}
            <div class="col-lg-4 mt-4">
                <img src="./images/portofolio/2.jpg" alt="portofolio-desainmurah.id" class="img-fluid img-responsive rounded shadow">
            </div>
            {{-- 3 --}}
            <div class="col-lg-4 mt-4">
                <img src="./images/portofolio/3.jpg" alt="portofolio-desainmurah.id" class="img-fluid img-responsive rounded shadow">
            </div>
        </div>

        <div class="row">
            {{-- 4 --}}
            <div class="col-lg-4 mt-4">
                <img src="./images/portofolio/5.jpg" alt="portofolio-desainmurah.id" class="img-fluid img-responsive rounded shadow">
            </div>
            {{-- 5 --}}
            <div class="col-lg-4 mt-4">
                <img src="./images/portofolio/6.jpg" alt="portofolio-desainmurah.id" class="img-fluid img-responsive rounded shadow">
            </div>
            {{-- 6 --}}
            <div class="col-lg-4 mt-4">
                <img src="./images/portofolio/7.jpg" alt="portofolio-desainmurah.id" class="img-fluid img-responsive rounded shadow">
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="https://griyabangunindonesia.com/portofolio/jasa-desain/">
                <button class="btn btn-danger px-3 rounded-5"><i class="bi bi-images"></i> Full Portofolio</button>
            </a>
        </div>
    </div>

    {{-- testimoni --}}
    <div class="container mt-5 atas">
        <h2 class="text-center text-uppercase fw-bold atas">Testimoni</h2>
        <div class="row mt-2">
            <div class="col-lg-3 text-center mt-4">
                <img src="./images/testimoni/1.webp" alt="" class="img-fluid img-responsive">
                <p class="mt-3 text-center text-secondary">“Proses pengerjaan memuaskan, harga terjangakau”</p>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <p class="fw-italic mt-2">Klien</p>
            </div>
            <div class="col-lg-3 text-center mt-4">
                <img src="./images/testimoni/2.webp" alt="" class="img-fluid img-responsive">
                <p class="mt-3 text-center text-secondary">“Hasilnya memuaskan, sesuai keinginan, harga ramah di terjangkau”</p>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <p class="fw-italic mt-2">Klien</p>
            </div>
            <div class="col-lg-3 mt-4 text-center">
                <img src="./images/testimoni/3.webp" alt="" class="img-fluid img-responsive">
                <p class="mt-3 text-center text-secondary">“Respon Customer Service sangat baik dan cepat, hasil desainnya bagus dan mudah dipahami oleh kontraktor ”</p>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <p class="fw-italic mt-2">Klien</p>
            </div>
            <div class="col-lg-3 mt-4 text-center">
                <img src="./images/testimoni/4.webp" alt="" class="img-fluid img-responsive">
                <p class="mt-3 text-center text-secondary">“Konsultasi dilayani dengan baik, datang ke kantornya juga nyaman dan harga juga terjangkau”</p>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <p class="fw-italic mt-2">Klien</p>
            </div>
        </div>
    </div> 

    {{-- payment --}}
    <div class="container mt-5 atas">
        <img src="images/payment2.png" alt="payment desainmurah.id" onmouseover="this.src='images/payment1.png';" onmouseout="this.src='images/payment2.png';" class="img-responsive img-fluid">
    </div>
 
@endsection 