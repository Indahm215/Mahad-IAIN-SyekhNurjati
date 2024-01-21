@extends('user.layout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>SEJARAH</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{url('/web')}}">Kembali</a></li>
        <li>Sejarah</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<section class="about">
      <div class="container" data-aos="fade-up">

        <!-- <div class="section-header">
          <h2>Tentang</h2>
          <p>Ma’had merupakan tempat pengembangan dan penguatan potensi mahasiswa di bidang al-Qur’an, ilmu  keagamaan,  kebahasaan  dan  pembiasaan tradisi pesantren.</p>
        </div> -->

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Latar Belakang</h3>
            <img src="/assets/ppp.jpeg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ma’had al-Jami’ah adalah tempat pengembangan dan penguatan potensi mahasiswa  di  bidang  al-Qur’an,  ilmu  keagamaan,  kebahasaan  dan  pembiasaan tradisi pesantren.</p>
            <p>Sejak  berdirinya  Institut  Agama  Islam  Negeri  (IAIN)  Syekh  Nurjati  yang sebelumnya bernama STAIN Cirebon Fakultas Tarbiyah IAIN Sunan Gunung Djati Cirebon, memiliki mandat utama sebagai pusat pengkajian dan pengembangan ilmu- ilmu keislaman.</p>
            <p>Berada disebuah wilayah tiga cirebon dengan masyarakat yang dikenal religius, IAIN Syekh Nurjati Cirebon memiliki kedudukan yang strategis bagi pembentukan citra Islam di Indonesia. kontribusi itu akan semakin nyata dengan berbagai tawaran alternatif kajian keislaman yang komprehensif dalam mengatasi persoalan umat dan bangsa.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p>Posisi IAIN Syekh Nurjati sedemikian mengharuskan adanya formulasi yang integratif terhadap studi-studi keislaman yang menuntut adanya penguasaan terhadap ilmu-ilmu keislaman secara lebih komprehensif dengan pendekatan multidisiplin.
              </p>
              <p>Keberadaan ma’had al-jami’ah dalam konteks ini diyakini  dapat menopang posisi strategis tersebut. dengan ma’had al jami’ah diyakini dapat memperkuat citra IAIN Syekh Nurjati yang unik dan khas sebagai pengemban misi studi keislaman secara komprehensif.</p>
              <p>Melalui program-program ta’lim yang diselenggarakan ma’had al-jami’ah diharapkan  dapat  dibangun  penguatan  akademik  dan  spiritualitas  Islam  sebagai basis   keunggulan   IAIN   Syekh   Nurjati.</p>
              <p>Pada   program   ma’had   al-jami’ah   ini diharapkan dapat meningkatkan kemampuan mahasiswa dalam penguasaan dasar- dasar keislaman, keterampilan, bahasa arab dan bahasa inggris, serta pembiasaan dalam penanaman akhlakul karimah.</p>
              <div class="position-relative mt-4">
                <img src="/assets/kajian.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://youtu.be/WDLgfqMDH4I" target="_blank" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

@endsection