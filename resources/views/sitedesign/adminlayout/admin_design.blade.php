<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <style type="text/css">
      
    </style>
    <!-- Bootstrap -->
    <link href="{{ asset('dashbord/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('dashbord/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('dashbord/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('dashbord/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('dashbord/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashbord/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashbord/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashbord/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashbord/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css') }}" />


    <!-- Custom Theme Style -->
    <link href="{{ asset('dashbord/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

<body>
@include('sitedesign.adminlayout.admin_header')

@include('sitedesign.adminlayout.admin_sidebar')

@yield('maincont')

@include('sitedesign.adminlayout.admin_footer')

<!-- jQuery -->
    <script src="{{ asset('dashbord/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('dashbord/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('dashbord/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('dashbord/vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('dashbord/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('dashbord/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dashbord/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.gritter.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('forgotpwd/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script src="{{ asset('dashbord/build/js/custom.min.js') }}"></script>
    <!-- <script src="{{ asset('/js/allvelidetion.js') }}"></script> -->

  </body>
</html>
