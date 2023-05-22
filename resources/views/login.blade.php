@extends('layouts.main')

@section('container')
<!-- Main Body -->
<div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-top: 8%;">
<!-- Akhir Body  -->

<!-- FORM -->
<div class="container col-xl-6">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"></div>
     <div class="arrow-left"></div>
      <div class="m-5 form-bagus">
       <div class="judul-form w-auto p-0">
        <br>
         <h3>Login</h3>
        </div>
       <form class="p-4">
      <div class="form-group">
    <label for="exampleFormControlInput1" class="mx-0 fs-4">E-mail</label>
  <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="">
 </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="mx-0 fs-4">Password</label>
    <input type="password" class="form-control mx-0 w-100" id="inputPassword" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="">
  </div>
       <button type="button" class="btn-success mw-100 w-100 my-3">Login</button>
       <P>Tidak Punya Akun? <a href="/registrasi"><strong style="color: rgba(232, 202, 50, 1);">Daftar</strong></a></P>
      </form>
     </div>
    </div>
   <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12"></div>
  </div>
 </div>
</div>
</div>
@endsection