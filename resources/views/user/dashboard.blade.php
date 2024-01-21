<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mahad IAIN Syekh Nurjati</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/logo3.png" rel="icon">
  <link href="/user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/user/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/user/assets/css/main.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="/user/assets/css/formulir.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@syekhnurjati.ac.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62231-481264</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/iaincerbon" target="_blank" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/iainsnjcrb?_rdc=1&_rdr" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/mahadsyekhnurjati/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/iainsnjcirebon/?originalSubdomain=id" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/user/assets/img/logo.png" alt="">
        <h1>Sign in<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#">Beranda</a></a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#pengurus">Pengurus</a></li>
          <li><a href="#blog">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{url('/sej')}}">Sejarah</a></li>
              <li><a href="{{url('/vimi')}}">Visi & Misi</a></li>
              <li><a href="{{url('/tuj')}}">Tujuan</a></li>
              <li><a href="{{url('/ked')}}">Kedudukan & Fungsi</a></li>
              <li><a href="{{url('/stor')}}">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>FAQ's</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#faq">Lihat FAQ</a></li>
              <li><a href="{{route('faq.create')}}">Ajukan Pertanyaan</a></li>
            </ul>
          </li>
          <li><a href="#">Pendaftaran</a></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">     
      <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
          <a href="https://youtu.be/3l7Tx7t-8KQ" class="glightbox play-btn"></a>
          <h2>Mahad</h2>
          <h2>Al-Jami'ah IAIN</h2>
          <h2><span>Syekh Nurjati</span></h2>
          <p>Website Resmi Mahad IAIN Syekh Nurjati Cirebon </br> Jl. Perjuangan By Pass Sunyaragi, Kota Cirebon, Jawa Barat. 45132</p>    
          <a class="cta-btn" href="#">Daftar</a>
        </div>
      </section>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-0 mt-5">
            <div class="d-flex justify-content-center justify-content-sm-center" >
              <img src="/assets/logo2.png" alt="">
            </div>
        </div>  
      </>
    </div>
    
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="tentang" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang</h2>
          <p>Ma’had merupakan tempat pengembangan dan penguatan potensi mahasiswa di bidang al-Qur’an, ilmu  keagamaan,  kebahasaan  dan  pembiasaan tradisi pesantren.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Kata Pengantar</h3>
            <img src="/assets/dok1.jpeg" class="img-fluid rounded-4 mb-4" alt="">
            
            <p>Mahad IAIN Syekh Nurjati merupakan asrama yang khusus diperuntukan bagi para mahasantri baru semester 1 dan semester 2 dari semua fakultas yang saat ini terdiri dari 5 fakultas, sebagai berikut : </p>
            <ol>
              <li> Fakultas Ilmu Tarbiyah dan Keguruan</li>
              <li> Fakultas Ushuluddin dan Adab</li>
              <li> Fakultas Dakwah dan Komunikasi Islam</li>
              <li> Fakultas Syariah</li>
              <li> Fakultas Ekonomi dan Bisnis Islam</li>
            </ol>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Dengan memanfaatkan teknologi, Mahad IAIN Syekh Nurjati  memiliki beberapa kelebihan yang diharapkan mampu untuk menyokong pembelajaran. Di antaranya :
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Memiliki aplikasi e-learning sendiri.</li>
                <li><i class="bi bi-check-circle-fill"></i> Memiliki channel Youtube yang berisi kajian-kajian dari maha guru kami.</li>
                <li><i class="bi bi-check-circle-fill"></i> Memiliki sosial media dari mulai Facebook, Instagram, Twitter, sampai LinkeIn untuk memberikan update terkini.</li>
              </ul>
              <p>Mahad sendiri sifatnya bergilir, para mahasantri baru akan diberikan tes untuk mengetahui nilai mahasantri yang nantinya akan dijadikan acuan oleh pihak mahad dalam menentukan siapa saja para mahasantri yang akan masuk ke mahad pada semester satu dan semester dua nanti.</p>
              <div class="position-relative mt-4">
                <img src="/assets/kajian.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://youtu.be/WDLgfqMDH4I" target="_blank" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

<!-- ======= Clients Section ======= -->
  <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="clients/mesjid.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="clients/ruangbelajar.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="clients/mejabelajar.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="clients/kasur.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="clients/lemari.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="clients/jemuran.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section>
    -->
  <!-- End Clients Section -->



    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="/assets/tutor2.jpeg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Mahaguru</strong> consequuntur quae diredo para mesta</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Mahasantri</strong> adipisci atque cum quia aut</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Tutor</strong> aut commodi quaerat</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    
    <!-- End Call To Action Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="galeri" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri</h2>
          <p>Dokumentasi santri, kegiatan-kegiatan mahad, fasilitas dan acara-acara yang ada pada mahad Iain Syekh Nurjati</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-santri">Santri</li>
              <li data-filter=".filter-kegiatan">Kegiatan</li>
              <li data-filter=".filter-fasilitas">Fasilitas</li>
              <li data-filter=".filter-acara">Acara</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">
          @foreach ($dataGal as $item)
            <div class="col-xl-3 col-md-6 portfolio-item {{ 'filter-'.$item->kategori_gambar }}">
              
              <div class="portfolio-wrap">
                <a href="{{ asset('gambargaleri/'.$item->gambar) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('gambargaleri/'.$item->gambar) }}" height="230px" class="img-fluid"></a>
              </div>
            </div><!-- End Portfolio Item -->
          @endforeach
              
          </div><!-- End Portfolio Container -->
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="pengurus" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pengurus</h2>
          <p>Pembimbing dan Tutor terbaik serta pakar di bidangnya!</p>
        </div>

        <div class="row gy-4">
          @foreach($dataTut as $item)
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('gambargaleri/'.$item->foto) }}" height="100%" class="img-fluid" alt="">
              <h4>{{ $item -> nama }}</h4>
              <span>Tutor</span>
              
            </div>
          </div><!-- End Team Member -->
          @endforeach

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="/user/assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Pembimbing</span>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                pertanyaan yang sering diajukan
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
            @foreach ($dataFaq as $item)  
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">•</span>
                    {{ $item -> pertanyaan }}
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    {{ $item -> jawaban }}
                  </div>
                </div>
              </div><!-- # Faq item-->
              @endforeach
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

      <div class="section-header">
          <h2>Blog Terkini</h2>
          <p>Baca Pengumuman, Berita, dan Informasi Penting Seputar Ma'had IAIN Syekh Nurjati di sini</p>
        </div>

        <div class="row gy-5 posts-list">
          @foreach ($dataBlog as $item)
          <div class="col-xl-3 col-md-6">
            <article>
              <div class="post-img">
                <img src="{{ asset('gambargaleri/'.$item->gambar) }}" height="180px" alt="" class="img-fluid">
              </div>
              <p class="post-category">{{ $item->kategori }}</p>

              <h2 class="title">
                <a href="{{ $item->link }}" target="_blank">{{ $item->judul }}</a>
              </h2>

              {{-- <div class="d-flex align-items-center">
                <img src="/user/assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div> --}}

            </article>
          </div><!-- End post list item -->
          @endforeach

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('user.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/user/assets/vendor/aos/aos.js"></script>
  <script src="/user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/user/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/user/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/user/assets/js/main.js"></script>
  <!-- Template Main JS File -->
  <script src="/user/assets/js/formulir.js"></script>

</body>

</html>