<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('indah/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pendaftaran</title>
</head>

<body>
    <style>
        body {
            background-color: #e9ecef !important;
        }

        .card {
            max-width: 1200px;
            margin: auto;
            padding: 50px;
        }

        #header {
            border-bottom: 4px solid;
            padding-bottom: 11px;
        }

        #header img {
            width: 100%;
        }

        .dropzone {
            border: 2px solid #e5e5e5; 
            border-style: solid;      
            width: 130px;
            height: 150px;
            padding-top:35px;
            padding-bottom:20px;
            padding-left:30px;
        }


/* #form h5 span{
    margin-left: 20px;
} */
        #form .first-input {
            padding-left: 64px;
        }

        #ttd{
          padding-left: 1px;
        }
    </style>
    <div class="card">
        <div id="header">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('assets/logouniv.jpg') }}" style="" alt="">
                </div>
                <div class="col-8 text-center">
                    <h1>
                        PROGAM MA'HAD AL-JAMI'AH
                        INSTITUT AGAMA ISLAM NEGRI (IAIN)
                        SYEKH NURJATI CIREBON 2023
                    </h1>
                    <span>
                        Sekretariat: Jl. Perjuangan ByPass Sunyaragi Mahad. WA. 08976559992 (Danu), 089686859826 (Anwar)
                        Cirebon 45132 - Website: www.syekhnurjati.ac.id/ma'had E-mail: info@syekhnurjati.ac.id
                    </span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/logo.jpeg') }}" alt="">
                </div>
            </div>
        </div>
        <div id="container">
            <div class="text-center mt-4">
                <h2>
                    FORMULIR PENDAFTARAN MAHASANTRI
                </h2>
            </div>
            <div id="form" class="mt-3">
                <h5>
                    I. <span style="margin-left: 37px;">Identitas Diri</span>
                </h5>
                <div class="row">
                    <div class="col-3 first-input">
                        Nama Lengkap
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        NIM
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nim">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Jenis Kelamin
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8 row">
                        <div class="form-check col-4" style="padding-left: 2.375rem">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki"
                                value="laki">
                            <label class="form-check-label" for="laki">
                                Laki Laki
                            </label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                value="perempuan">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Tempat, Tgl Lahir
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="ttl">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        SLTA
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="slta">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        No. Telepon (Handphone)
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8 row">
                        <div class="col-5">
                            <input type="text" class="form-control" name="no_hp">
                        </div>
                        <div class="col-2 text-bold">
                            WA :
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="no_wa">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Pendidikan Pesantren
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="pendidikan_pesantren">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Gedung / No Kamar
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="no_kmr">
                    </div>
                </div>
                <h5 class="mt-5">
                    II. <span style="margin-left: 30px;">Identitas Orang Tua/Wali</span>
                </h5>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Nama Ayah
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8 row">
                        <div class="col-5">
                            <input type="text" class="form-control" name="nama_ayah">
                        </div>
                        <div class="col-2">
                            Nama Ibu
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="nama_ibu">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Pekerjaan
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="pekerjaan">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        No. Telepon (Handphone)
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8 row">
                        <div class="col-5">
                            <input type="text" class="form-control" name="no_hp_wali">
                        </div>
                        <div class="col-2 text-bold">
                            WA :
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="no_wa_wali">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Alamat
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <textarea name="alamat" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <h5 class="mt-5">
                    III. <span style="margin-left: 27px;">Identitas Akademik</span>
                </h5>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Jurusan (Program Studi)
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="jurusan">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Fakultas
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="fakultas">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Jalur Masuk
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <div class="row">
                            <div class="form-check col-4" style="padding-left: 2.375rem">
                                <input class="form-check-input" type="radio" name="jalur_masuk" id="span"
                                    value="span">
                                <label class="form-check-label" for="span">
                                    SPAN-PTKIN
                                </label>
                            </div>
                            <div class="form-check col-4">
                                <input class="form-check-input" type="radio" name="jalur_masuk" id="mandiri"
                                    value="mandiri">
                                <label class="form-check-label" for="mandiri">
                                    SPMB-MANDIRI
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check col-4" style="padding-left: 2.375rem">
                                <input class="form-check-input" type="radio" name="jalur_masuk" id="ptain"
                                    value="ptain">
                                <label class="form-check-label" for="ptain">
                                    SPMB-PTAIN
                                </label>
                            </div>
                            <div class="form-check col-4">
                                <input class="form-check-input" type="radio" name="jalur_masuk" id="beasiswa"
                                    value="beasiswa">
                                <label class="form-check-label" for="beasiswa">
                                    Beasiswa
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mt-5">
                    IV. <span style="margin-left: 20px;">Riwayat Kesehatan</span>
                </h5>
                <div class="row mt-3">
                    <div class="col-3 first-input">
                        Penyakit yang diderita
                    </div>
                    <div class="col-1 text-end">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="jurusan">
                        <input type="file" name="pas_foto">
                        <small style="font-style: italic;">(Sertakan Surat Keterangan Dokter atau Kosongkan bila tidak
                            punya)</small>
                    </div>
                </div>
                <div class="mt-5" style="margin-left: 50px;">
                    Demikian data ini saya sampaikan dengan sebenar-benarnya.
                </div>
                <br>
                {{-- <div class="row mt-5" style="margin-left: 50px;">
                    
                </div> --}}

                
                {{-- <div class="row mt-3" style="margin-left: 50px;">
                  <div class="dropzone">
                    <p style="margin-left: 15px; margin-top: 20px">3 X 4</p>
                    <input type="file" name="pas_foto">
                  </div>
                    
                  <div class="col-5">                            
                  </div>
                  <div class="col-2 text-bold">
                    <p>Cirebon, </p>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control" name="tanggal">
                  </div>                                                                   
                </div>
                 --}}
{{-- 
                <div class="row mt-3" style="margin-left: 50px;"> 
                  <di class="dropzone">
                    <p style="margin-left: 15px; margin-top: 20px">3 X 4</p>
                    <input type="file" name="pas_foto">
                  </di
                  
                </div> --}}
                
                <div class="row mt-3" style="margin-left: 50px;">
                  <div class="col-1 text-end"> 
                    <div class="dropzone">
                      <p style="margin-left: 15px; margin-top: 20px">3 X 4</p>
                      <input type="file" name="pas_foto">
                    </div>
                  </div>

                  {{-- <div class="col-1 text-end"></div> --}}
                  <div class="col-11 row">
                    <div class="col-5">                            
                    </div>
                    <div class="col-2 text-bold">
                      <p>Cirebon, </p>
                    </div>
                    <div class="col-5">
                    <input type="text" class="form-control" name="tanggal">
                    </div>                                              
                  </div>
                  <div class="col-1 text-end"></div>
                    <div class="col-11 row">
                    <div class="col-5">                            
                    </div>
                    <div class="dropzone">
                      <p >Materai & Ttd</p>
                        <input type="file" name="pas_foto">
                    </div>                        
                  </div>
                  <div class="col-1 text-end"></div>
                  <div class="col-1 text-end"></div>
                </div>
              




                <div class="row mt-2">
                    <div >
                        <h5 class="mt-12">
                            <span style="margin-left: 60px;">Catatan</span>
                        </h5>
                        <ul type="none">
                            
                            <li>&#x2713; Mahasantri diwajibkan mengikuti program Ma'had Al-Jami'ah</li>
                            <li>&#x2713; Mengisi Surat Pernyataan di atas materai 10.000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
