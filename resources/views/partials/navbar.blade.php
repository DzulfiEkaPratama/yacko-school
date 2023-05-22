<!--  Navbar  -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background: linear-gradient(206.34deg, #000031 -22.46%, #0057A5 105.59%);">
      <div class="container-fluid mx-5 mx-5-ys">
        <a class="navbar-brand" href="/">
          <img src="assets/image/logo-sekolah.png" alt="Logo Yacko School" class="d-inline-block align-text-top lg-ys">
          <a href="/" class="text-white">YACKO SCHOOL</a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item bd-cos">
              <a class="nav-link {{ ($title === "Home" ) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item bd-cos">
              <a class="nav-link {{ ($title === "Product" ) ? 'active' : '' }} {{ ($title === "Augmented Reality" ) ? 'active' : '' }}" href="/product">Product</a>
            </li>
            <div class="dropdown bd-cos my-nav">
                <button class="dropdown-toggle h-100 btn-cos navbar-hover {{ ($title === "Tour & Travel" ) ? 'active-button' : '' }} {{ ($title === "Masjid Baiturahman" ) ? 'active-button' : '' }}"  style=""  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                  Tour & Travel
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item {{ ($title === "Tour & Travel" ) ? 'active' : '' }} {{ ($title === "Masjid Baiturahman" ) ? 'active' : '' }}" href="/tour&travel">Info</a></li>      
                </ul>
              </div>
            <li class="nav-item bd-cos">
              <a class="nav-link {{ ($title === "Service" ) ? 'active' : '' }} {{ ($title === "Detail Service" ) ? 'active' : '' }} {{ ($title === "Formulir Pendaftaran" ) ? 'active' : '' }}" href="/service">Service</a>
            </li>
            <li class="nav-item bd-cos">
              <a class="nav-link {{ ($title === "Gallery" ) ? 'active' : '' }}" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item my-cos" style="padding-left: 5px; padding-right: 5px;">
              <a class="btn btn-secondary btn nav-button1 {{ ($title === "Login" ) ? 'nav-button' : '' }}" href="/login">Login</a>
            </li>
            <li class="nav-item my-cos"  style="padding-left: 5px; padding-right: 5px;">
              <a class="btn btn-secondary btn nav-button2 {{ ($title === "Register" ) ? 'nav-button' : '' }}" href="/registrasi">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->