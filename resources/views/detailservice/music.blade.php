@extends('layouts.main')

@section('container')
    <!--main Body-->
    <div class="container-fluid pt-5">
      <div class="row">
        <div class="col-lg-6 p-0 display-bg">
          <img src="assets/image/bg-movies.png" class="d-block lebar-bg" alt="...">
        </div>
        <div class="col-lg-6 bg-service-music">
          <h3 style="text-align: left;"  class="title-service-pro">Movie & Music
            Discussion
          </h3>
          <a href="/pendaftaran"><button class="btn btn-lg btn-warning btn-movies">Daftar</button></a>       
        </div>
      </div>
    </div>

    <div class="text-end mx-lg-5 mb-5">
      <h4  style="color: rgba(255, 255, 255, 0.233);"><a href="/service" style="color: rgba(255, 255, 255, 0.233);" onMouseOver="this.style.color='blue'"
        onMouseOut="this.style.color='rgba(255, 255, 255, 0.233)'">Services</a> / <strong class="active" style="color: white;"><a href="#">Detail</a></strong></h4>
      <img src="assets/vector/Vector 28.png" alt="" class="detail-hr">
    </div>
   <!-- Main Body -->
<!-- Main Body -->
<div class="container-fluid" style="max-width: 90%;">
  <div class="row">

    <div class="col-lg-8">
      <div class="row">
        <p class="mt-5 " style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit tempus, nisl libero id in diam. Consequat, in sed lobortis nec duis nunc, amet. Lectus tempus et, lorem sed tincidunt vestibulum faucibus in varius. Fusce commodo viverra sit aliquam tellus nisi, tempor turpis. Amet rhoncus accumsan nisl, facilisi. Cras in fermentum tellus nisl ac id. Non amet nisl risus dolor. Integer diam facilisis nec nec vitae. Egestas suscipit odio nulla eleifend id in congue nunc. Sodales lacus massa cursus ut nunc at sem vitae viverra.
          Senectus facilisi gravida mauris dictum enim elementum.</p>
        <div class="col-lg-5 mb-4">
          <img src="assets/image/netplix.png" class="mw-100 img-zoom lebar-gambar-music" alt="" srcset="">
        </div>
        <div class="col-lg-5 mb-4">
          <img src="assets/image/earphone.png" class="mw-100 img-zoom lebar-gambar-music" alt="" srcset="">
        </div>
        <div class="col-lg-10 mb-4">
          <img src="assets/image/ngumpulfoto.png" alt="" class="mw-100 img-zoom lebar-gambar-music-bw">
        </div>
      </div>
    </div>
   
    <div class="col-lg-4 sidebar-side">
      <div class="sidebar blog-sidebar">
        <div class="sidebar-widget services"  style="padding-top:0;">
          <div class="widget-inner mt-5" style="background-image: linear-gradient(to bottom, #001C56, #004889);">
            <div class="sidebar-title text-center" style="color:#E8CB32;">
               <h4>All Services</h4>
            </div>
             <ul class="list-unstyled">
               <li class=""><a href="#" style="font-size: 14px;">Introdution</a></li>
               <li class="active"><a href="#" style="font-size: 14px;">Movie & Music Disqussion</a></li>
               <li class=""><a href="#" style="font-size: 14px;">Persentation & Speech</a></li>
               <li><a href="#" style="font-size: 14px;">Casual Convertation</a></li>
               <li><a href="#" style="font-size: 14px;">Business Convertation</a></li>
               <li><a href="#" style="font-size: 14px;">Story Writing / Storytelling</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection