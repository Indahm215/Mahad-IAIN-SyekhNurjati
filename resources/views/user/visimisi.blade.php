@extends('user.layout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>VISI & MISI</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{url('/')}}">Kembali</a></li>
        <li>Visi & Misi</li>
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
              <h3 class="bold">
                Visi :
              </h3>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Terwujudnya pusat pemantapan akidah dan akhlak, serta pengembangan ilmu dan tradisi keislaman demi lahirnya sarjana muslim yang memiliki keunggulan di bidang ilmu keislaman, kemampuan berbahasa, berkepribadian, dan berakhlakul karimah serta terciptanya masyarakat muslim indonesia yang cerdas, dinamis, kreatif, inovatif, damai dan sejahtera.</li>
              </ul>
            </div>
            <div class="content ps-0 ps-lg-5">
              <h3 class="bold">
                Misi :
              </h3>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Mendidik mahasiswa memiliki kemampuan  membaca  dan  memahami al-Qur’an dengan baik dan benar, kemantapan akidah, kedalaman spiritual, keluhuran akhlak, dan keluasan ilmu.</li>
                <li><i class="bi bi-check-circle-fill"></i> Memperkuat proses internalisasi nilai- nilai keislaman, kepribadian, dan keadaban melalui  pendidikan terintegrasi  antara pendidikan akademik perguruan tinggi dan pendidikan pesantren.</li>
                <li><i class="bi bi-check-circle-fill"></i> Melatih keterampilan berbahasa bagi mahasiswa melalui bi’ah lughawiyah yang kondusif.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

@endsection