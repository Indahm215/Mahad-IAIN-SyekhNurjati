@extends('user.layout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Tujuan</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{url('/web')}}">Kembali</a></li>
        <li>Tujuan</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->
<!-- ======= About Us Section ======= -->
<section class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-4">
            <img src="/assets/logo2.png" class="img-fluid rounded-4 mb-4" alt="">  
          </div>
          <div class="col-lg-8">
            <div class="content ps-0 ps-lg-5">
              <p class="bold">
                Ma’had al-Jami’ah diharapkan mampu menghasilkan lulusan IAIN yang:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> 1.	Berakidah kuat dan berakhlak mulia</li>
                <li><i class="bi bi-check-circle-fill"></i> 2.	Memiliki kemampuan dan keterampilan dalam membaca al-qur’an dengan benar sesuai kaidah tajwid</li>
                <li><i class="bi bi-check-circle-fill"></i> 3.	Menguasai ilmu-ilmu keislaman sebagai dasar pengembangan ilmu pengetahuan islam secara luas</li>
                <li><i class="bi bi-check-circle-fill"></i> 4.	Memiliki integritas dan spirutualitas yang luhur</li>
                <li><i class="bi bi-check-circle-fill"></i> 5.	Berdisiplin, mandiri, berpikiran terbuka, jujur dan bertanggungjawab</li>
                <li><i class="bi bi-check-circle-fill"></i> 6.	Mampu mempraktekkan ibadah amaliyah dasar fiqih keislaman</li>
                <li><i class="bi bi-check-circle-fill"></i> 7.	Memiliki kemampuan kademik kompetitif sehingga mampu mengaplikasikan pengetahuan dan keterampilan yang dimilikinya dalam kehidupan sebagai individu maupun sebagai bagian dari masyarakat.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

@endsection