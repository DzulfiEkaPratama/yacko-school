@extends('layouts.main')

@section('container')
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
@endsection