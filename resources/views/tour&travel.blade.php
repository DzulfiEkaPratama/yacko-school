@extends('layouts.main')

@section('container')
    <!-- Main Body -->
    <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/image/bg-tour-travel.png" class="d-block w-100">
          </div>
        </div>
    </div>
    
    <div>
      <img src="assets/vector/Rectangle 16.png" class="rounded mx-auto d-block my-3" alt="vektor-strip">
    </div>
    <div>
      <h3 class="text-center my-5">Paket Tour pilihan</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col my-5 mx-1 text-center">
          <img src="assets/image/paket-pilihan/pexels-tomáš-malík-4090091 1.png" alt="Candi Borobudur" class="mw-100">
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Candi Borobudur</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Magelang, Jawa Tengah</h4>
        </div>
        <div class="col my-5 mx-1 text-center">
          <a href="/Masjid-Baiturahman"><img src="assets/image/paket-pilihan/Blog-Masjid-Raya-Baiturrahman-Aceh-28 1.png" alt="Masjid Baiturahman" class="mw-100"></a>
          <h4 class="my-3">Rp.3.400.000</h4> 
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Masjid Baiturahman</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Banda Aceh</h4>   
        </div>
        <div class="col my-5 mx-1 text-center">
          <img src="assets/image/paket-pilihan/Blog-Danau-Toba-Medan-DWSP-21 1.png" alt="Danau Toba" class="mw-100">
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Danau Toba</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Sumatra Utara</h4>
        </div>
      </div>
    </div>
     
    <div class="container">
      <div class="row">
        <div class="col my-5 mx-1 text-center">
          <img src="assets/image/paket-pilihan/Blog-Istana-Maimun-Medan-13 1.png" alt="Istana Maimon" class="mw-100">
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Istana Maimon</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Medan</h4>
        </div>
        <div class="col my-5 mx-1 text-center">
          <img src="assets/image/paket-pilihan/Blog-Gedung-Sate-Bandung-15 1.png" alt="Gedung Sate" class="mw-100">
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Gedung Sate</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Bandung</h4>
        </div>
        <div class="col my-5 mx-1 text-center">
          <img src="assets/image/paket-pilihan/Blog-Lawang-Sewu-Semarang-01 1.png" alt="Lawang Sewu" class="mw-100">
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Lawang Sewu</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Semarang</h4>
        </div>
      </div>
    </div>
  
    <div class="container">
        <div class="row">
          <div class="col my-auto mx-5 text-center">
            <img src="assets/image/paket-pilihan/cs.png" class="img-fluid w-50" alt="...">
            <h5 style="color: yellow;">Bantuan Staff lokal</h5>
            <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit adipisci impedit vel quaerat, nesciunt ea assumenda beatae pariatur, hic perspiciatis exercitationem blanditiis nostrum ratione culpa dolores tempore accusantium dolorem dolorum voluptas neque. Magnam ea nemo explicabo nam earum, hic illum distinctio sequi tenetur cumque ipsa nobis velit commodi. Culpa?</p>
          </div>
          <div class="col my-auto mx-5 text-center">
            <img src="assets/image/paket-pilihan/pesawat.png" class="img-fluid w-100" style="padding-bottom: 10%; padding-top: 30%;" alt="...">
            <h5 style="color: yellow;">Kemudahan perjalanan</h5>
            <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit adipisci impedit vel quaerat, nesciunt ea assumenda beatae pariatur, hic perspiciatis exercitationem blanditiis nostrum ratione culpa dolores tempore accusantium dolorem dolorum voluptas neque. Magnam ea nemo explicabo nam earum, hic illum distinctio sequi tenetur cumque ipsa nobis velit commodi. Culpa?</p>
          </div>
          <div class="col my-auto mx-5 text-center">
            <img src="assets/image/paket-pilihan/koper 1.png" class="img-fluid w-50" style="padding-bottom: 3%; padding-top: 10%;" alt="...">
            <h5 style="color: yellow;">Aman & Terpercaya</h5>
            <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit adipisci impedit vel quaerat, nesciunt ea assumenda beatae pariatur, hic perspiciatis exercitationem blanditiis nostrum ratione culpa dolores tempore accusantium dolorem dolorum voluptas neque. Magnam ea nemo explicabo nam earum, hic illum distinctio sequi tenetur cumque ipsa nobis velit commodi. Culpa?</p>
          </div>
        </div>
      </div>
    <!-- Akhir Body  -->
@endsection
