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
    <title>Surat Pernyataan</title>
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
            padding-left:27px;
        }


/* #form h5 span{
    margin-left: 20px;
} */
        #form .first-input {
            padding-left: 64px;
        }
    </style>

    <div class="card">
        <div id="container">
            <div class="text-center mt-3 ">
                <h3>
                    SURAT PERNYATAAN
                </h3>
            </div>
            <div id="form" class="mt-5" style="margin-left: 70px;">
                <div class="row mt-4">
                    <div class="col-12 first-input">
                        Yang bertanda tangan di bawah ini, saya:
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-2 first-input">
                        NAMA
                    </div>
                    <div class="col-1">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2 first-input">
                        NIM
                    </div>
                    <div class="col-1">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2 first-input">
                        FAKULTAS
                    </div>
                    <div class="col-1">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2 first-input">
                        JURUSAN
                    </div>
                    <div class="col-1">:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2 first-input">
                        ALAMAT
                    </div>
                    <div class="col-1">:</div>
                    <div class="col-8">
                        <textarea name="alamat" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 first-input">
                        Menyatakan dengan sadar dan tidak ada tekanan maupun paksaan dari pihak manapun, menyatakan dengan sebenar-benarnya bahwa saya terikat, patuh, dan tunduk atas poin-poin berikut ini:
                    </div>
                    <div class="col-12 first-input mt-3">
                      <ol>
                        <li>&nbspMentaati segala bentuk peraturan dan tata terbit Ma'had Al-Jami'ah dan berkewajiban menjaga nama baik Ma'had Al-Jami'ah,</li>
                        <li class="mt-2">&nbspMengikuti seluruh kegiatan dan program Ma'had Al-Jami'ah pada periode tersebut,</li>
                        <li class="mt-2">&nbspMendapatkan izin pulang dari pengurus mahad bidang perizinan,</li>
                        <li class="mt-2">&nbspBertanggung jawab menjaga seluruh fasilitas kamar dan umum Ma’had Al-Jami’ah dan akan mengganti segala bentuk kerusakan atau kehilangan fasilitas Ma’had Al-Jami’ah,</li>
                        <li class="mt-2">&nbspTidak akan menuntut baik dari pihak saya pribadi maupun keluarga saya dalam bentuk apapun kepada pihak Ma’had Al-Jami’ah.Jika kemudian hari ditemukan atau terjadi yang dianggap merugikan diri saya maupun keluarga saya,</li>
                        <li class="mt-2">&nbspTidak membawa teman untuk menginap di kamar tanpa seizin pengurus Ma’had Al-Jami’ah,</li>
                        <li class="mt-2">&nbspJika saya menyatakan mengundurkan diri (boyong) dari Ma’had sebelum program Ma’had selesai. Saya berkewajiban melaporkan diri dengan menyertakan surat pernyataan mengundurkan diri yang diserahkan kepada pengurus Ma’had dan atas sepengetahuan Mudir/Direktur Ma’had Al-Jami’ah</li>
                      </ol>
                    </div>
                </div>
                {{-- <div class="row mt-5" style="margin-left: 50px;">
                    
                </div> --}}
                <div class="row mt-5" style="margin-left: 50px;">
                    <div class="col-1 text-end"></div>
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

                <div class="col-1 text-end"></div>
                <div class="col-1 text-end"></div>
            </div>
        </div>
    </div>
</body>

</html>
