<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="" type="" />

  <title>QUẢN LÝ BÁN HÀNG</title>
  <link rel="icon" type="image/png" href="{{asset('assets/admin/login/images/icons/favicon.ico')}}"/>
  <!-- Bootstrap -->
  <link href="{{asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- <link href="{{asset('assets/admin/vendors/font-awesome/css/all.css')}}" rel="stylesheet"> -->
  <!-- NProgress -->
  <link href="{{asset('assets/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('assets/admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<!--   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
  <!-- bootstrap-progressbar -->
  <link href="{{asset('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('assets/admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{asset('assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <!-- BAT TAT TABLE DATA RESPONSIVE  -->
  <link href="{{asset('assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
  <!-- BAT TAT TABLE DATA RESPONSIVE  -->
  <!-- Switchery -->
  <link href="{{asset('assets/admin/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{asset('assets/admin/build/css/custom.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <!-- <link rel="stylesheet" href="{{asset('assets/admin/vendors/angular-material.min.css')}}"> -->
  <link href="{{asset('assets/admin/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">

  <link rel='stylesheet' href="{{asset('assets/js/loading-bar.min.css')}}" media='all' />
  <link rel='stylesheet' href="{{asset('assets/css/toastr.min.css')}}" media='all' />
  <!-- <link rel='stylesheet' href="{{asset('assets/css/loading.css')}}" media='all' /> -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('admin')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{ Session::get('name') }}</span></a>
          </div>
          </div>

          <div class="clearfix"></div>
          <!-- SIDE BAR -->
       <!--    @if(Session::get('role')==1)
          @includeIf('partials.admin_sidebar')
          @endif
          @if(Session::get('role')!==1)
          @includeIf('partials.smod_sidebar')
          @endif -->

          <!-- SIDE BAR -->
        </div>
      </div>

      <!-- top navigation bar -->
      <!-- @includeIf('partials.admin_navbar') -->
      <!-- /top navigation bar -->
     

      <!-- page content -->
       @yield('content')  
      <!-- footer content -->
      <!-- @includeIf('partials.admin_footer') -->
      <!-- /footer content -->
<!-- jQuery -->
<script src="{{asset('assets/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('assets/admin/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<!-- <script src="{{asset('assets/admin/vendors/Chart.js/dist/Chart.min.js')}}"></script> -->
<!-- gauge.js -->
<script src="{{asset('assets/admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('assets/admin/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('assets/admin/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('assets/admin/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<!-- <script src="{{asset('assets/admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script> -->
<!-- bootstrap-daterangepicker -->
<script src="{{asset('assets/admin/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<!-- BAT TAT TABLE DATA RESPONSIVE  -->
<script src="{{asset('assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<!-- BAT TAT TABLE DATA RESPONSIVE  -->

<!-- <script src="{{asset('assets/admin/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script> -->
<!-- <script src="{{asset('assets/admin/vendors/font-awesome/css/all.js')}}"></script> -->
<!-- Custom Theme Scripts -->
<script src="{{asset('assets/admin/build/js/custom.js')}}"></script>
<!-- Switchery -->
<script src="{{asset('assets/admin/vendors/switchery/dist/switchery.min.js')}}"></script>
<!-- ANGULAR -->
<script src="{{asset('assets/admin/vendors/angular-1.5.min.js')}}"></script>  
<script src="{{asset('assets/admin/vendors/angular-animate.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/angular-aria.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/angular-messages.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/angular-material.min.js')}}"></script>  
<script src="{{asset('assets/admin/vendors/1.js')}}"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="{{asset('assets/admin/vendors/1.js')}}"></script>
<script src="{{asset('assets/admin/vendors/2.js')}}"></script>
<script src="{{asset('assets/js/product.js')}}"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="{{asset('assets/js/loading-bar.min.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/pnotify/dist/pnotify.js')}}"></script>
<script src="{{asset('assets/admin/vendors/pnotify/dist/pnotify.buttons.js')}}"></script>


</body>
</html>
