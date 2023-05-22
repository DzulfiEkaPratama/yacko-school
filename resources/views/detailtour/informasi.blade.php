<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Main CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Yacko School - Informasi Dan Perjalanan</title>

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
                <button class="dropdown-toggle h-100 btn-cos"  style="background: transparent; border: transparent;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                  Tour & Travel
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item active" href="/tour&travel">Info</a></li>
                  <li><a class="dropdown-item" href="#">Another Action</a></li>
                  <li><a class="dropdown-item" href="#">Another Another Action</a></li>
                </ul>
              </div>
            <li class="nav-item bd-cos">
              <a class="nav-link" href="/service">Service</a>
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
    <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/image/Group 100.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h1 class="text-end title-info" style="color: rgba(232, 202, 50, 1);">Mesjid Baiturrahman Aceh</h1>
            <h2 class="text-end subtitle-info" style="float: right;">Banda Aceh</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col p-3 text-end mx-lg-5 mb-5 detail-hp">
          <h4  style="color: rgba(255, 255, 255, 0.233);"><a href="tour&travel.html" style="color: rgba(255, 255, 255, 0.233);" onMouseOver="this.style.color='blue'"
          onMouseOut="this.style.color='rgba(255, 255, 255, 0.233)'">Tour & Travel</a> / <strong class="active" style="color: white;"><a href="#">Detail</a></strong></h4>
          <img src="assets/vector/Vector 28.png" alt="">
        </div>
        <div class="col-3 pt-3"> 
          <h4>Perjalanan Untuk:</h4>
          <div class="justify-content-center d-flex spend-time my-4" style="background-color: red; height: 7vh; width: 120px;">
            <h5 class="pt-1 my-auto"><i class="far fa-clock"></i> 3 Hari</h5>
          </div>
        </div>
        <div class="col p-3 text-end mb-5">
          <h4  style="color: rgba(255, 255, 255, 0.233);"><a href="/tour&travel" class="detail-hp2" style="color: rgba(255, 255, 255, 0.233);" onMouseOver="this.style.color='blue'"
          onMouseOut="this.style.color='rgba(255, 255, 255, 0.233)'">Tour & Travel</a> / <strong class="active  detail-hp2" style="color: white;"><a href="#">Detail</a></strong></h4>
          <img src="assets/vector/Vector 28.png" alt="" class="detail-hr">
        </div>
      </div>
    </div>
        
    <div class="container">
      <div class="row">
        <div class="col pt-3 my-auto">
          <h4>Informasi & Perjalanan</h4>
        </div>
        <div class="col pt-3 my-auto">
          <h4 class="ps-5 text-lg-center form-d">Form Registrasi</h4>
        </div> 
      </div>
    </div>
             
    <div class="container-fluid" style="max-width: 90%;">
      <div class="row">
        <div class="col-lg-8">
          <div class="mt-md-2 p-5" style="border-radius: 10px; border: 2px solid #FFFFFF;">
            <h4>Detail Info</h4>
            <p style="color: rgba(232, 202, 50, 1);">Yuk kunjungi destinasi wisata bersejahra bersama Yacko School !!! </p>
            <hr>
            <div class="container px-0">
              <div class="row">
                <div class="col-lg-6">
                  <h5>Keberangkatan</h5>
                </div>
                <div class="col-lg-6">
                  <p>Oktober 2021</p>
                </div>
              </div>
              <hr class="mt-0">

              <div class="row">
                <div class="col-lg-6">
                  <h5>Minuman Pax</h5>
                </div>
                <div class="col-lg-6">
                  <p>2 Pax Travel Together</p>
                </div>
              </div>
              <hr class="mt-0">

              <div class="row">
                <div class="col-lg-6">
                  <h5>Akomodasi</h5>
                </div>
                <div class="col-lg-6">
                  <p>2 Malam</p>
                </div>
              </div>
              <hr class="mt-0">
            </div>

            <div class="container px-0">
              <div class="row">
                <div class="col-lg-6">
                  <h5>Included</h5>
                </div>
                <div class="col-lg-6">
                  <p>- 2 Malam menginap di Hotel Pilihan Anda termasuk sarapan pagi.</p>
                  <p>- Tranportasi AC : 2-5 orang by Avanza | 6 – 10 orang by Hiace. Tiket masuk obyek wisata.</p>
                  <p>- Tiket masuk Objek Wisata</p>
                  <p>- Lokal Guide </p>
                  <p>- VAT 1%</p>
                </div>
              </div>
              <hr class="mt-0">

              <div class="row">
                <div class="col-lg-6">
                  <h5>Exclude</h5>
                </div>
                <div class="col-lg-6">
                  <p>- Tiket Pesawat</p>
                  <p>- Pengeluaran yang bersifat pribadi seperti laundry, telpon</p>
                  <p>- Soft drinks and minuman beralkohol diluar program</p>
                  <p>- Asuransi Perjalanan</p>
                  <p>- local guide.</p>
                  <p>- Holiday Surcharge.</p>
                </div>
              </div>
              <hr class="mt-0">

              <div class="row">
                <div class="col-lg-6 mt-3">
                  <h4>Harga</h4>
                </div>
              </div>
              <hr class="mt-0">
          </div>

          <div class="container px-0">
            <div class="row">
              <div class="col-lg-6 mt-3">
                <h5>Kamar Standar</h5>
              </div>
              <div class="col-lg-6 mt-3 text-lg-end">
                <p>Rp. 313.651</p>
              </div>
            </div>   
                                    
            <div class="row">
              <div class="col-lg-6 mt-3">
                <h5>Kamar Superior</h5>
              </div>
              <div class="col-lg-6 mt-3 text-lg-end">
                <p>Rp. 414.202</p>
              </div>
            </div>       

            <div class="row">
              <div class="col-lg-6 mt-3">
                <h5>Kamar Executive</h5>
              </div>
              <div class="col-lg-6 mt-3 text-lg-end">
                <p>Rp. 487.902</p>
              </div>
            </div>
          </div>
          <hr class="mt-0">

          <div class="container px-0">
              <div class="row">
              <div class="col-lg-6 mt-4">
                <h4>Kebijakan & Pembatalan</h4>
              </div>
            </div>
            <hr class="mt-2">
            
            <div class="row">
            <div>
              <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id metus faucibus semper diam sagittis nunc. Cursus ultrices sed cursus velit dui eget vel. Dignissim et, quam malesuada gravida tempus ut fringilla non lobortis. At diam lorem dictum aliquam vitae tellus suspendisse consectetur. Tellus mattis dictumst mi tellus mattis fermentum, eget feugiat. Mauris est aliquet elementum diam. Quam volutpat nibh imperdiet adipiscing. Orci, integer tempor consectetur morbi ut semper in nulla. Sem ac molestie ut eget.</p>
            </div>         
          </div>
        </div>                        
      </div>
    </div>

    <div class="col-lg-4 ps-lg-4 col-form-label">
      <div class="border border-2" style="border-radius: 5px;">
        <div class="d-flex judul-form-2 justify-content-center p-2" style="border-radius: 8px;">
          <div class="mx-3 my-auto">
            <img src="assets/image/Vector (1).png" alt="" srcset="">
          </div>
          <div style="color: #16265A;">
            <p>mulai dari : </p>
            <h3>Rp. 3.400.000</h3>
          </div>
        </div>

            <form class="p-4 pb-5">
              <div class="form-group mb-2">
                <label for="exampleFormControlInput1" class="mb-2">Nama Lengkap</label>
                <input type="text" class="bg-transparent form-control" id="exampleFormControlInput1" placeholder="">
              </div>
              <div class="form-group mb-2">
                <label for="exampleFormControlInput1" class="mb-2">Nomor Telephone</label>
                <input type="text" class="bg-transparent form-control" id="exampleFormControlInput1" placeholder="">
              </div>
              <div class="form-group mb-2">
                <label for="exampleFormControlTextarea1" class="mb-2">Alamat Pengiriman</label>
                <textarea class="bg-transparent form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
                <label for="exampleFormControlInput1" class="mb-2">
                  Metode Pembayaran
                </label>
               <div class="form-check">
                <input class="form-check-input border-white bg-transparent" type="checkbox" value="" id="defaultCheck2" style="border-radius: initial;">
                <label class="form-check-label" for="defaultCheck1">
                  Cash / Tunai
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input border-white bg-transparent" type="checkbox" value="" id="defaultCheck2" style="border-radius: initial;">
                <label class="form-check-label" for="defaultCheck2">
                  Kartu Kredit
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input border-white bg-transparent" type="checkbox" value="" id="defaultCheck3" style="border-radius: initial;">
                <label class="form-check-label" for="defaultCheck3">
                  Bank Transfer
                </label>
              </div>
              <div>
                <button type="submit" class="btn btn-primary mt-4 w-100" style="background: rgba(255, 0, 0, 1);">BOOKING SEKARANG</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
              
             
    <div class="container-fluid pb-5" style="max-width: 90%;">
      <div class="col-lg-8 pt-5">
        <div class="border border-2" style="border-radius: 10px;">
          <div class="row px-4 bw-px">
            <div class="col pt-3 my-auto mb-5 ms-5 m-lg-5">
              <h4>Perjalanan</h4>
              <hr style="max-width: 495px;">
              <h4><img src="assets/vector/Vector (1).png" alt=""> Hari 1 : Jakarta - Banda Aceh</h4>
              <br>
              <h4><img src="assets/vector/Vector (2).png" alt=""> Hari 2 : Destinasi Wisata</h4>
              <br>
              <h4><img src="assets/vector/Vector (3).png" alt=""> Hari 3 : Banda Aceh - Jakarta</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Akhir Body  -->

    <!-- Main JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ea942ec16d.js" crossorigin="anonymous"></script>
  </body>
</html>
