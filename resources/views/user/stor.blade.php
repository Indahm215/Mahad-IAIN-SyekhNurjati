@extends('user.layout')
@section('content')
  </html>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>STRUKTUR ORGANISASI</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{url('/web')}}">Kembali</a></li>
        <li>Struktur Organisasi</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->

<!-- ======= About Us Section ======= -->
<section id="tentang" class="about">
      <div class="container" data-aos="fade-up">
        <div class="d-flex justify-content-center justify-content-sm-center" >
          <img src="/assets/stor2.png" alt="">
        </div>

      </div>
    </section>
<!-- End About Us Section -->

@endsection