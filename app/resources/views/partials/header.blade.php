@auth
  {{-- untuk yang sudah login --}}
  <div>
    <nav class="navbar navbar-expand-lg text-center">
      <a class="navbar-brand" href="/"><img src="../images/logo-2.png" alt="logo desainmurah.id"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mt-3 me-5">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                <i class="bi bi-person-fill-exclamation"></i> Hallo, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard/{{ auth()->user()->name }}"><i class="fa-solid fa-folder-open"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>  
                <li><a class="dropdown-item" href="/my-profile/{{ auth()->user()->name }}"><i class="fa-solid fa-user"></i> My Profile</a></li>
                <li><hr class="dropdown-divider"></li>  
                {{-- berikan akses gerbang yang namanya admin --}}
                @can('owner')
                <li><a class="dropdown-item" href="/user/create"><i class="fa-solid fa-file-pen"></i> Buat Postingan</a></li>
                <li><hr class="dropdown-divider"></li>  
                <li><a href="/create-artikel" class="dropdown-item"><i class="fa-solid fa-pen"></i> Buat Artikel</a></li>
                <li><hr class="dropdown-divider"></li> 
                @endcan 
                {{-- this code can access for user that have key gate --}}
                @can('admin')
                <li><a href="/buat-produk-prioritas" class="dropdown-item"><i class="fa-solid fa-cart-plus"></i> Buat Produk Prioritas</a></li>
                <li><hr class="dropdown-divider"></li>  
                <li><a href="/pemilik" class="dropdown-item"><i class="fa-solid fa-right-to-bracket"></i> Masuk ke Admin</a></li>
                <li><hr class="dropdown-divider"></li> 
                @endcan
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button> 
                  </form>
                </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>

    @else
    {{-- untuk yang belum login --}}
    <nav class="navbar navbar-expand-lg text-start ">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="./images/logo-2.png" alt="logo header desainmurah.id">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    
              {{-- sebelah kanan --}}
              <ul class="navbar-nav  ms-auto"> 
                <div class="d-grip gap-2 me-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-person fs-5"></i> Member
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/login">
                            <i class="bi bi-box-arrow-in-right "></i> Login</a>
                          </li> 
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="/registrasi">
                            <i class="bi bi-person-add "></i> Daftar </a>
                          </li>
                        </ul>
                    </li>
                </div>
              </ul>
          </div>
        </div>
    </nav>
@endauth



