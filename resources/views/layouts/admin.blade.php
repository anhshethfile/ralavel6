<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LMS Library System | Senior Project</title>

    {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css'> --}}
    <link rel='stylesheet' href='https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.1/dist/bootstrap-float-label.min.css'>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">

    @yield('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin/anhsheth.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-book"></i> Books <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="borrows">Book Borrow</a></li>
                        <li><a href="issue">Book Issue</a></li>
                        <li><a href="reservation">Book Reservation</a></li>
                        <li><a href="return">Book Return</a></li>
                        <li><a href="report">Book Report</a></li>
                        <li><a href="list">All list books</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i> Student <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Student Register</a></li>
                        <li><a href="#">Student Borrow Book</a></li>
                        <li><a href="#">Student Issue Book</a></li>
                        <li><a href="#">Student Report</a></li>
                        <li><a href="students">All List Student</a></li>
                      </ul>
                    </li>
                     <li><a><i class="fa fa-users"></i> Supplier <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Supplier Register</a></li>
                        <li><a href="#">Supplier Report</a></li>
                        <li><a href="#">All List Supplier</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Staff <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Stuff Register</a></li>
                        <li><a href="#">Stuff Report</a></li>
                        <li><a href="#">All List Stuff</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Users <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">User Register</a></li>
                        <li><a href="#">User Report</a></li>
                        <li><a href="user">All List User</a></li>
                      </ul>
                    </li>
                    <li><a href="chart"><i class="fa fa-bar-chart-o"></i>List Chart</a></li>
                    <li><a><i class="fa fa-clone"></i>Policy & Term <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">About Library</a></li>
                        <li><a href="#">FQA Query</a></li>
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
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('admin/anhsheth.jpg') }}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                         {{-- <a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Logxccs Out</a> --}}
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
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
   <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <!-- iCheck -->
   <script src="{{ asset('admin/vendors/iCheck/icheck.min.js')}}"></script>
   <!-- Datatables -->
   <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

   <script src="{{ asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

   <script src="{{ asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>

   <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

   <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
   <script src="{{ asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/jszip/dist/jszip.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
   <script src="{{ asset('admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

   <!-- Custom Theme Scripts -->
   <script src="{{ asset('admin/build/js/custom.min.js')}}"></script>
   <!-- Dynamic Table -->

  @yield('js')
  </body>
</html>
