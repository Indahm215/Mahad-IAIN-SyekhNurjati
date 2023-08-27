<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Admin</title>

    <!-- Bootstrap -->
    <link href="../admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/usr')}}" class="site_title"><i class="fa fa-sign-out"></i> <span>Mahad Nurjati</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/admin/prod/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Admin </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>GENERAL</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Beranda</span></a>
                  </li>
                  <li><a><i class="fa fa-user"></i> Mahaguru <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Semua Mahaguru</a></li>
                      <li><a href="form_advanced.html">Tambah Mahaguru</a></li>
                      <li><a href="form_validation.html"> Profil Mahaguru</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Mahasantri <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Mahasantri Aktif</a></li>
                      <li><a href="form_advanced.html">Tambah Mahasantri</a></li>
                      <li><a href="form.html">Mahasantri Lulus</a></li>
                      <li><a href="form_validation.html"> Profil Mahasantri</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-smile-o"></i> Tutor <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">Semua Tutor</a></li>
                      <li><a href="projects.html">Tambah Tutor</a></li>
                      <li><a href="projects.html">Profil Tutor</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-lock"></i> Admin <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">Semua Admin</a></li>
                      <li><a href="projects.html">Tambah Admin</a></li>
                      <li><a href="projects.html">Profil Admin</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Mahad IAIN</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-building-o"></i> Fakultas <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Ilmu Tarbiyah & Keguruan<span class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">                       
                          <li><a href="#level2_1">Lihat Prodi</a></li>                          
                          <li><a href="#level2_2">Tambah Prodi</a></li>                        
                        </ul>
                      </li>
                      <li><a>Ushuluddin & Adab<span class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">                       
                          <li><a href="#level2_1">Lihat Prodi</a></li>                          
                          <li><a href="#level2_2">Tambah Prodi</a></li>                        
                        </ul>
                      </li>
                      <li><a>Dakwah & Komunikasi Islam<span class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">                       
                          <li><a href="#level2_1">Lihat Prodi</a></li>                          
                          <li><a href="#level2_2">Tambah Prodi</a></li>                        
                        </ul>
                      </li>
                      <li><a>Syariah<span class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">                       
                          <li><a href="#level2_1">Lihat Prodi</a></li>                          
                          <li><a href="#level2_2">Tambah Prodi</a></li>                        
                        </ul>
                      </li>
                      <li><a>Ekonomi & Bisnis Islam<span class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">                       
                          <li><a href="#level2_1">Lihat Prodi</a></li>                          
                          <li><a href="#level2_2">Tambah Prodi</a></li>                        
                        </ul>
                      </li>
                    </ul>
                  <li><a><i class="fa fa-edit"></i> Pendaftaran <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Calon Pendaftar</a></li>
                      <li><a href="form_validation.html">Unggah Dokumen</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-picture-o"></i> Galeri <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">Semua Gambar</a></li>
                      <li><a href="page_404.html">Tambah Gambar</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-globe"></i> Blog <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">Semua Blog</a></li>
                      <li><a href="page_404.html">Tambah Blog</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-question-circle"></i> FAQ's <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">Semua Faq</a></li>
                      <li><a href="page_404.html">Tambah Faq</a></li>
                    </ul>
                  </li>              
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="/admin/prod/images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/admin/prod/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/admin/prod/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/admin/prod/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/admin/prod/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="col-md-12" style="display: inline-block;">            
              <div class="top_tiles">

                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-edit"></i></div>
                    <div class="count">179</div>
                    <h3>Pendaftar</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="count">179</div>
                    <h3>Mahasantri</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="count">179</div>
                    <h3>Mahaguru</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-smile-o"></i></div>
                    <div class="count">179</div>
                    <h3>Tutor</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-globe"></i></div>
                    <div class="count">179</div>
                    <h3>Blog</h3>
                  </div>
                </div>
                <!-- <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-building-o"></i></div>
                    <div class="count">179</div>
                    <h3>Fakultas</h3>
                  </div>
                </div> -->
                <!-- <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-image"></i></div>
                    <div class="count">179</div>
                    <h3>Galeri</h3>
                  </div>
                </div> -->
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-question-circle"></i></div>
                    <div class="count">179</div>
                    <h3>FAQ's Baru</h3>
                  </div>
                </div>               
              </div>            
          </div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">                  
                  <div class="x_content">
                  <div class="col-md-9 col-sm-12 ">
                    <div class="demo-container" style="height:600px">
                      <img src="/assets/utama65.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 ">
                    <div>
                        <div class="x_title">
                          <h2>Top Profiles</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled top_profiles scroll-view">
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Pendaftar</a>
                              <p><strong>2300 </strong> Total Pendaftar Baru </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Mahasantri</a>
                              <p><strong>2300 </strong> Total Mahasantri </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-blue profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Mahaguru</a>
                              <p><strong>2300 </strong> Total Mahaguru </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Tutor</a>
                              <p><strong>2300 </strong> Total Tutor </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Admin</a>
                              <p><strong>2300 </strong> Total Admin </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../admin/vendors/Flot/jquery.flot.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../admin/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../admin/vendors/moment/min/moment.min.js"></script>
    <script src="../admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../admin/build/js/custom.min.js"></script>
  </body>
</html>