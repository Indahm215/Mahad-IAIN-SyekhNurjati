@extends('user.layout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>KEDUDUKAN & FUNGSI</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{url('/web')}}">Kembali</a></li>
        <li>Kedudukan & Fungsi</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->
<!-- ======= About Us Section ======= -->
<section id="tentang" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>KEDUDUKAN</h3>
            <img src="/assets/ked.jpeg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Pusat Ma`had Al-Jami`ah yang lebih familiar dengan sebutan Ma`had Al-Jami`ah, secara kelembagaan merupakan suatu kesatuan organik atau unit tak terpisahkan dari IAIN Syekh Nurjati Cirebon, dan menjadi salah satu pilarnya.</p>
            <p>Bahkan, keberadaan ma`had bagi lembaga pendidikan tinggi Islam seperti IAIN dapat dikatakan sebagai salah satu rukunnya. Tanpa kehadiran pesantren dan ma`had bagi IAIN, maka kehadirannya bisa sia-sia.</p>
            <p>Pernyataan ini tidak berlebihan mengingat tugas IAIN sebagai lembaga pendidikan tinggi Agama Islam yang demikian berat dan mulia, yaitu menyiapkan kader ulama yang ilmuan dan ilmuan yang ulama.</p>
            <p>Atau setidaknya, mempersiapkan akademisi yang agamawan, dan agamawan yang juga akademisi.</p>
          </div>
          <div class="col-lg-6">
            </br>
            </br> 
            <p>Secara kelembagaan, IAIN juga memiliki tugas serta mandat dalam pengembangan integrasi keilmuan, yang—secara konseptual—meliputi: hadharah al-nash, hadharah al-`ilmi, hadharah al-falsafah, dan hadharah al-`irfan.</p>
            
            <h3>FUNGSI</h3>
            <p>Sejalan dengan kedudukan, tugas serta mandat tersebut di atas, maka IAIN mempunyai fungsi untuk menjaga, mengembangkan serta mentransmisikan peradaban serta keilmuan di dalam Islam.</p>
            <p>Maka, kehadiran Ma`had di IAIN SNJ Cirebon, selain untuk menghendel hal-hal yang belum tercover oleh lembaga, juga untuk melakukan intensifikasi dan akselerasi program keagamaan serta program-program lainnya yang relevan.</p>
            <p>Fungsi tersebut meliputi pengembagan pembelajaran bidang Al-Qur’an, kitab kuning, `ibadah, praktek bahasa asing, tsaqafah ma`hadiyah serta pengembangan minat dan bakat.</p>
            <img src="/assets/utama1.jpg" class="img-fluid rounded-4 mb-4" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

@endsection