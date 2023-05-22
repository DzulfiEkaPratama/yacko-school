@extends('layouts.main')

@section('container')
    <div class="container-fluid pt-5">
      <div class="row">
        <div class="col-lg-6 p-0 display-bg">
          <img src="assets/image/bg-ar.png" class="d-block lebar-bg" alt="...">
        </div>
        <div class="bg-aug">
          <h2 class="title-aug">Augmented <br>Reality</h2>
          <p class="desc-aug">By Yacko School</p>
        </div>
      </div>
    </div>
    
    <div class="text-end mx-lg-5 mb-5">
<h4  style="color: rgba(255, 255, 255, 0.233);"><a href="/product" style="color: rgba(255, 255, 255, 0.233);" onMouseOver="this.style.color='blue'"
  onMouseOut="this.style.color='rgba(255, 255, 255, 0.233)'">Product</a> / <strong class="active" style="color: white;"><a href="#">Detail</a></strong></h4>
<img src="assets/vector/Vector 28.png" alt="" class="detail-hr">
</div>
    <!-- Main Body -->
    <div class="container-fluid" style="max-width: 90%;">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-12 text-center my-auto">
              <img src="assets/image/unnamed 3.png" alt="" srcset class="mw-100">
            </div>
            <div class="col-lg-3">
              <img src="assets/image/unnamed 3.png" class="mw-100" alt="" srcset="">
            </div>
            <div class="col-lg-3">
              <img src="assets/image/unnamed 3.png" class="mw-100" alt="" srcset="">
            </div>
            <div class="col-lg-3">
              <img src="assets/image/unnamed 3.png" class="mw-100" alt="" srcset="">
            </div>
            <div class="col-lg-3">
              <img src="assets/image/unnamed 3.png" class="mw-100" alt="" srcset="">
            </div>
            <p class="mt-5" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit tempus, nisl libero id in diam. Consequat, in sed lobortis nec duis nunc, amet. Lectus tempus et, lorem sed tincidunt vestibulum faucibus in varius. Fusce commodo viverra sit aliquam tellus nisi, tempor turpis. Amet rhoncus accumsan nisl, facilisi. Cras in fermentum tellus nisl ac id. Non amet nisl risus dolor. Integer diam facilisis nec nec vitae. Egestas suscipit odio nulla eleifend id in congue nunc. Sodales lacus massa cursus ut nunc at sem vitae viverra.
              Senectus facilisi gravida mauris dictum enim elementum.</p>
          </div>
        </div>
        <div class="col-lg-4 p-3">
          <div class="border border-2" style="border-radius: 5px;">
            <div class="d-flex judul-form-2 justify-content-center p-2" style="border-radius: 2px;">
              <div class="mx-3 my-auto">
                <img src="assets/image/Vector (1).png" alt="" srcset="">
              </div>
              <div style="color: #16265A;">
                <p class="my-1">mulai dari : </p>
                <h3>Rp. 3.400.000</h3>
              </div>
            </div>
            <form class="p-4 pb-5">
              <div class="form-group mb-2">
                <label for="exampleFormControlInput1" class="mb-2">Nama Lengkap</label>
                <input type="text" class="bg-transparent form-control mx-0" id="exampleFormControlInput1" style="color: white;" placeholder="">
              </div>
              <div class="form-group mb-2">
                <label for="exampleFormControlInput1" class="mb-2">Nomor Telephone</label>
                <input type="text" class="bg-transparent form-control mx-0" id="exampleFormControlInput1" style="color: white;" placeholder="">
              </div>
             <div class="form-group mb-2">
                        <label for="exampleFormControlTextarea1" class="mb-2">Alamat Pengiriman</label>
                        <textarea class="bg-transparent form-control" id="exampleFormControlTextarea1" rows="3"
                            style="color: white;"></textarea>
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
                <button type="submit" class="btn btn-primary mt-4 w-100" style="background: rgba(7, 152, 30, 1);">PESAN SEKARANG</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Body -->


    <script>
      var myCarousel = document.querySelector('#carouselExampleControlsNoTouching')
      var carousel = new bootstrap.Carousel(myCarousel)
    </script>
@endsection