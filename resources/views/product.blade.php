@extends('layouts.main')

@section('container')
<div class="bleber">
    <!--main Body-->
    <div class="container-fluid pt-5 bg-px">
        <div class="row">
            <div class="col-lg-6 p-0 display-bg">
                <img src="assets/image/bg-product.png" class="d-block lebar-bg" alt="...">
            </div>
            <div class="bg-tablet">
                <h2 class="title-tablet">Our Product</h2>
                <p class="desc-tablet">By Yacko School</p>
            </div>
        </div>
    </div>

    <center>
        <div class="col-md-12 my-5 w-75 border">
            <div class="row">
                <h1 class="col-md-2 p-5" style="z-index: 2;">Virtual<br><span class="mx-5"
                        style="color: #E8CA32;">Reality</span></h1>
                <img src="assets/image/OBJECTS.png" class="col-md-5 p-5 gambar-product-123" style="z-index: 1;">
                <p class="col-md-5 p-5 desc-product" style="text-align: justify;">Virtual reality adalah sebuah
                    teknologi yang membuat pengguna atau user dapat berinteraksi dengan lingkungan yang ada dalam dunia
                    maya yang disimulasikan oleh komputer, sehingga pengguna merasa berada di dalam lingkungan tersebut.

                    'Virtual' memiliki arti dekat, sedangkan 'reality' berarti hal-hal nyata yang kita alami sebagai
                    manusia. Dengan demikian, dapat disimpulkan bahwa Virtual Reality berarti 'mendekati kenyataan'.</p>
            </div>
        </div>
    </center>

    <center>
        <div class="col-md-12 my-5 w-75 border">
            <div class="row">
                <h1 class="col-md-2 p-5" style="z-index: 2;">Augmented<br><span class="mx-5"
                        style="color: #E8CA32;">Reality</span></h1>
                <img src="assets/image/unnamed 1.png" class="col-md-5 p-5 gambar-product-123" style="z-index: 1;">
                <p class="col-md-5 p-5 desc-product" style="text-align: justify;">Augmented Reality adalah teknologi
                    yang memperoleh penggabungan secara real-time terhadap digital konten yang dibuat oleh komputer
                    dengan dunia nyata. Augmented Reality memperbolehkan pengguna melihat objek maya 2D atau 3D yang
                    diproyeksikan terhadap dunia nyata.</p>
                <button type="button" class="btn btn-danger btn-sm mx-auto my-5 col-md-3 btn-product"
                    style="width: 200px;"><a href="/augmentedrealty" style="text-decoration: none; color: white;">Lihat
                        Detail</a></button>
            </div>
        </div>
    </center>

    <center>
        <div class="col-md-12 my-5 w-75 border">
            <div class="row">
                <h1 class="col-md-2 p-5" style="z-index: 2;">3D<br><span class="mx-5"
                        style="color: #E8CA32;">Modeling</span></h1>
                <img src="assets/image/dragon-4538368_960_720 1.png" class="col-md-5 p-5 gambar-product-123"
                    style="z-index: 1;">
                <p class="col-md-5 p-5 desc-product" style="text-align: justify;">Virtual reality adalah sebuah
                    teknologi yang membuat pengguna atau user dapat berinteraksi dengan lingkungan yang ada dalam dunia
                    maya yang disimulasikan oleh komputer, sehingga pengguna merasa berada di dalam lingkungan tersebut.

                    'Virtual' memiliki arti dekat, sedangkan 'reality' berarti hal-hal nyata yang kita alami sebagai
                    manusia. Dengan demikian, dapat disimpulkan bahwa Virtual Reality berarti 'mendekati kenyataan'.</p>
            </div>
        </div>
    </center>
    <br>
    <br>
    <!-- Akhir Body  -->
</div>
@endsection
