<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css'> --}}
    <link rel='stylesheet' href='https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.1/dist/bootstrap-float-label.min.css'>

    <!-- Bootstrap -->
    <link href="{{ asset('layouts/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('layouts/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('layouts/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('layouts/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('layouts/build/css/custom.min.css') }}" rel="stylesheet">

    @yield('css')
  </head>

  <body class="nav-md">
        @include('layouts.backend.sidebar_menu')
        <!-- top navigation -->
        @include('layouts.backend.top_navigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
                <div class="">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>Users <small>Some examples to get you started</small></h3>
                          </div>
                          <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">Go!</button>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
            @yield('content')
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
   <script src="{{ asset('layouts/vendors/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('layouts/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <!-- iCheck -->
   <script src="{{ asset('layouts/vendors/iCheck/icheck.min.js')}}"></script>
   <!-- Datatables -->
   <script src="{{ asset('layouts/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

   <script src="{{ asset('layouts/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

   <script src="{{ asset('layouts/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>

   <script src="{{ asset('layouts/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

   <script src="{{ asset('layouts/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
   <script src="{{ asset('layouts/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/jszip/dist/jszip.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
   <script src="{{ asset('layouts/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

   <!-- Custom Theme Scripts -->
   <script src="{{ asset('layouts/build/js/custom.min.js')}}"></script>
   <!-- Dynamic Table -->

  @yield('js')
  </body>
</html>
