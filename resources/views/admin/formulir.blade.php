@extends('user.layout')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{url('/')}}">Kembali</a></li>
        <li>Halaman Pendaftaran</li>
      </ol>
    </div>
  </nav>
  <br><br>
  <img src="/assets/logo3.png" alt="logo mahad" width="10%">
</div>

<!-- End Breadcrumbs -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulir Pendaftaran</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <!-- Template Main CSS File -->
        <link href="/user/assets/css/formulir.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <br>
        <br>
    </head>
    <body style="text-align: center;">
    
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                	<form action="" method="post" class="f1">
                		<p>Berikut Langkah-Langkah Pendaftaran mahad IAIN Syekh Nurjati</p>
                		<div class="f1-steps">
                			<div class="f1-progress">
                			    <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 25%;"></div>
                			</div>
                            <div class="f1-step active">
                                <div class="f1-step-icon"><i class="fa fa-hand-o-up"></i></div>
                                <p>Petunjuk</p>
                            </div>
                			<div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-file-text-o"></i></div>
                				<p>Surat Pernyataan</p>
                			</div>
                			<div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-file-text"></i></div>
                				<p>Formulir</p>
                			</div>
                		    <div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-check-square-o"></i></div>
                				<p>Daftar</p>
                			</div>
                		</div>
                		<!-- step 1 -->
                		<fieldset>
                		    <h3>Petunjuk Pendaftaran</h3>
                			<div>
                                <ol>
                                    <li><p>Unduh Surat Penyataan Santri</p></li>
                                    <li><p> Unduh Formulir Pendaftaran</p></li>
                                    <li><p> Isilah Dokumen Tersebut, Kemudian</p></li>
                                    <li><p> <i>(Jika Ingin Mendaftar Secara Offline)</i> Serahkan Kepada Petugas Mahad, Atau</p></li>
                                    <li><p> <i>(Jika Ingin Mendaftar Secara Online)</i> Scan Surat Pernyataan Calon Santri yang telah diisi Juga Formulir Pendaftaran Calon Santri</p></li>
                                    <li><p>Simpan Scan-an 2 Dokumen Tersebut Dalam Bentuk PDF</p></li>
                                    <li><p>Unggah PDF Tersebut</p></li>
                                    <li><p>Pengumuman Mahasantri Yang Diterima Akan Diumumkan Lewat Website</p></li>
                                </ol>
                            </div>
                            <br>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-warning btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </fieldset>
                        <!-- step 2 -->
                        <fieldset>
                            <h3>Surat Pernyataan Calon Santri</h3>
                            <br>
                            <div>
                                <ul>
                                    <li><img src="/admin/prod/images/suratp.png" width="15%"></img></li>
                                    <li><i>(klik pada gambar di atas untuk membuka dokumen)</i></li>
                                    <li><img src="/admin/prod/images/unduh.png" width="11%"></img></li>
                                    <li><i>(klik pada gambar di atas untuk mengunduh dokumen)</i></li>
                                </ul>
                            </div>                            
                            <br><br>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-secondary btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                <button type="button" class="btn btn-warning btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </fieldset>
                        <!-- step 3 -->
                        <fieldset>
                            <h3>Formulir Pendaftaran Calon Santri</h3>
                            <br>
                            <div>
                                <ul>
                                    <li><img src="/admin/prod/images/formp.png" width="14%"></img></li>
                                    <li><i>(klik pada gambar di atas untuk membuka dokumen)</i></li>
                                    <li><img src="/admin/prod/images/unduh.png" width="11%"></img></li>
                                    <li><i>(klik pada gambar di atas untuk mengunduh dokumen)</i></li>
                                </ul>
                            </div>                            
                            <br><br>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-secondary btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                <button type="button" class="btn btn-warning btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </fieldset>
                        <!-- step 4 -->
                        <fieldset>
                            <h3>Pendaftaran Online</h3>
                            <br>
                            <div>
                                <ul>
                                    <li><img src="/admin/prod/images/submit.png" width="14%"></img></li>
                                    <li><i>(klik pada gambar di atas untuk meng-upload dokumen pendaftaranmu)</i></li>
                                    <li>Dokumen dalam Format PDF</li>
                                </ul>
                            </div>                            
                            <br><br>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-secondary btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                <button type="submit" class="btn btn-warning btn-submit"><i class="fa fa-save"></i> Submit</button>
                            </div>                                                
                        </fieldset>
                	</form>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Template Main JS File -->
        <script src="/user/assets/js/formulir.js"></script>
        
    </body>
</html>


@endsection