<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Main CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Yacko School - Formulir Pendaftaran</title>

    <!-- Favicons -->
    <link href="assets/image/logo-sekolah.png" rel="icon">
    <link href="assets/image/logo-sekolah.png" rel="apple-touch-icon">

    <!-- Main Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
  </head>
  <body>
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
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item bd-cos">
              <a class="nav-link" href="/product">Product</a>
            </li>
            <div class="dropdown bd-cos my-nav">
                <button class="dropdown-toggle h-100 btn-cos"  style="color: rgba(255, 255, 255, 0.55); background: transparent; border: transparent;" onMouseOver="this.style.color='rgba(255, 255, 255, 0.7)'"
  onMouseOut="this.style.color='rgba(255, 255, 255, 0.55)'" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                  Tour & Travel
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/tour&travel">Info</a></li>
                  <li><a class="dropdown-item" href="#">Another Action</a></li>
                  <li><a class="dropdown-item" href="#">Another Another Action</a></li>
                </ul>
              </div>
            <li class="nav-item bd-cos">
              <a class="nav-link active" href="/service">Service</a>
            </li>
            <li class="nav-item bd-cos">
              <a class="nav-link" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item my-cos" style="padding-left: 5px; padding-right: 5px;">
              <a class="nav-link btn btn-secondary" style="background: rgba(255, 255, 255, 0.233); color: yellow; border: none; border-radius: 50px;" href="/login">Login</a>
            </li>
            <li class="nav-item my-cos"  style="padding-left: 5px; padding-right: 5px;">
              <a class="nav-link btn btn-secondary" style="background: transparent; color: yellow; border-color: rgb(240, 240, 240); border-radius: 50px" href="/registrasi">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

<!-- Main Body -->

<!-- FORM -->
<div class="container col-xl-6">
  <div class="col-12 panah">
    <a href="#" onclick="history.back(-1)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="80" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
    </a>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"></div>
    <div class="arrow-left"></div>
      <div class="m-5 form-bagus">
        <div class="judul-form w-auto p-0">
          <br>
          <h3>Formulir Pendaftaran</h3>
        </div>

        <form class="p-4">
          <div class="form-group">
            <label for="exampleFormControlInput1" class="mx-0 my-3">Nama Lengkap</label>
            <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="mx-0 my-3">E-mail</label>
            <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="mx-0 my-3">Password</label>
            <input type="password" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="mx-0 my-3">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="form-label mx-0 my-3">Alamat</label>
            <textarea class="form-control mx-0 w-100" id="exampleFormControlTextarea1" rows="3" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" required></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="mx-0 my-3">No Handphone</label>
            <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="mx-0 my-3">Metode Service</label>
            <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="" required>
          </div>
             <button type="button" class="btn-success mw-100 w-100 my-3">Submit</button>
        </form>
      </div>
    </div>
      <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12"></div>
  </div>
</div>
<!-- Akhir Body  -->


    <!-- Main JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
