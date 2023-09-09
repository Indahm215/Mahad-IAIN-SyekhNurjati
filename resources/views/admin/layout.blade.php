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
            @include('admin.sidebar')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin.header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.footer')
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
    <!-- jQuery Smart Wizard -->
    <!-- <script src="../admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> -->

    </body>
</html>