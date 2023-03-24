<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky  sidebar-sticky">
        <h2 class="sidebar-heading d-flex justify-content-between align-items-center px-3  mb-1 text-muted text-uppercase">
            <a href="/" class="text-decoration-none">
                <img src="images/logo-2.png" alt="logo-desain-murah" class="img-responsive img-fluid">
            </a>
        </h2>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Pengguna</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/pemilik">
                <span><i class="fa-solid fa-folder"></i> Dashboard</span>
            </a> 
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/admin-cek-admin">
                <span><i class="fa-solid fa-user-gear"></i> Admin</span>
            </a> 
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/admin-cek-user">
              <span><i class="fa-solid fa-user-group"></i> User</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/admin-cek-owner">
              <span><i class="fa-solid fa-user-tag"></i> Owner</span>
            </a>
            </li>
        </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Artikel</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>

      <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a href="/admin-cek-artikel" class="nav-link">
              <span><i class="fa-solid fa-book"></i> Data Artikel</span>
            </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Product</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="/admin-cek-produk">
            <span><i class="fa-solid fa-cart-shopping"></i> Data Produk</span>
          </a>
        </li>
      </ul>
      
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>LOGOUT</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2 ms-auto">
        <li class="nav-item dropdown">
          {{-- <a class="nav-link" href="#">
            <span><i class="fa-solid fa-right-from-bracket"></i> Logout</span>
          </a> --}}
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item ms-3 mt-2"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
          </form>
        </li>
      </ul>


    </div>
  </nav>