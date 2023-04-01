<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky  sidebar-sticky">
        <h2 class="sidebar-heading d-flex justify-content-between align-items-center px-3  mb-1 text-muted text-uppercase">
            <a href="/" class="text-decoration-none">
                <img src="images/logo-2.png" alt="logo-desain-murah" class="img-responsive img-fluid">
            </a>
        </h2>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Dashboard</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/super-admin">
                <span><i class="bi bi-window-fullscreen"></i> Dashboard</span>
            </a> 
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>MARKETING</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span> 
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="/daftar-marketing">
                <span><i class="bi bi-database"></i> Buka Data</span>
              </a>
            </li>
          </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>PROGRESS DESAIN</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>

      <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a href="/progress-desain" class="nav-link">
              <span><i class="bi bi-database"></i> Buka Data</span>
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
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item ms-3 mt-2"><i class="bi bi-box-arrow-right"></i> Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>