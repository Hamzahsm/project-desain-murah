<nav class="navbar navbar-expand-lg text-start ">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">BEHOME.ID</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- menu 1 --}}
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Jasa Kolam Koi</a>
            </li>
        </ul>

          {{-- sebelah kanan --}}
          <ul class="navbar-nav  ms-auto">
            {{-- member --}}
            <div class="d-grip gap-2 p-2 me-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user"></i> Member
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="cari-produk/?category=di-jual-rumah-dan-apartemen">
                        <i class="fa-regular fa-right-to-bracket"></i> Login</a>
                      </li> 
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="cari-produk/?category=di-sewakan-rumah-dan-apartemen">
                        <i class="fa-regular fa-user-plus"></i> Daftar </a>
                      </li>
                    </ul>
                </li>
            </div>
          </ul>
      </div>
    </div>
</nav>


