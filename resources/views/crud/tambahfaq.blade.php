@extends('user.layout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Ajukan Pertanyaanmu</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{url('/usr')}}">Kembali</a></li>
        <li>Form FAQ's</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->
<!-- ======= Contact Section ======= -->
<section id="faq" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <p>Silakan tulis pertanyaanmu di bawah!</p>
      </div>

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Lokasi:</h4>
                <p>Jl. Perjuangan By Pass Sunyaragi, Kota Cirebon, Jawa Barat, 45132</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@syekhnurjati.ac.id</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>No Telp:</h4>
                <p>+62231-481264</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Jam Operasi:</h4>
                <p>Senin-Jum'at : 08.00 - 16.00</p>
              </div>
            </div><!-- End Info Item -->
          </div>

        </div>

        <div class="col-lg-8">
          <form role="form" class="php-form" method="POST" action="{{ route('faq.store') }}">
            @csrf
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" type="text" name="pertanyaan" rows="7" placeholder="Tulis pertanyaanmu di sini"></textarea>
            </div>
            <div class="form-group mt-3">
              <input type="text" readonly class="form-control" name="jawaban" value = NULL>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan terkirim. Terimakasih!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pertanyaan</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </div>
  </section><!-- End Contact Section -->


@endsection