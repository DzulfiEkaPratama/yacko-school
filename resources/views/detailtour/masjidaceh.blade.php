@extends('layouts.main')

@section('container')
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
        <div class="d-flex judul-form-2 justify-content-center p-2" style="border-radius: 2px;">
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
                <input type="text" class="bg-transparent form-control" id="exampleFormControlInput1" placeholder="" style="color: white;">
              </div>
              <div class="form-group mb-2">
                <label for="exampleFormControlInput1" class="mb-2">Nomor Telephone</label>
                <input type="text" class="bg-transparent form-control" id="exampleFormControlInput1" placeholder="" style="color: white;">
              </div>
              <div class="form-group mb-2">
                <label for="exampleFormControlTextarea1" class="mb-2">Alamat Pengiriman</label>
                <textarea class="bg-transparent form-control" id="exampleFormControlTextarea1" rows="3" style="color: white;"></textarea>
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
              <hr style="max-width: 525px;">
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
@endsection
