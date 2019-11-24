    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                      <a href="{{route('admin.dashboard')}}" class="site_title"><i class="fa fa-home"></i> <span>LMS System</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                      <div class="profile_pic">
                        <img src="{{Storage::disk('public')->url('profile/'.Auth::user()->image)}}" width="48" height="48" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->name}}</h2>
                      </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                      <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('author.dashboard')}}">
                      <i class="fa fa-tachometer"></i> Dashboard</a></li>
                  </ul>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-tag"></i> Manage Books <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="borrows">Book Borrow</a></li>
                        <li><a href="issue">Book Issue</a></li>
                        <li><a href="reservation">Book Reservation</a></li>
                        <li><a href="return">Book Return</a></li>
                        <li><a href="report">Book Report</a></li>
                        <li><a href="{{route('admin.books')}}">All list books</a></li>
                       
                      </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i> Student <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Student Register</a></li>
                        <li><a href="#">Student Borrow Book</a></li>
                        <li><a href="#">Student Issue Book</a></li>
                        <li><a href="#">Student Report</a></li>
                        <li><a href="{{route('admin.students')}}">All List Student</a></li>
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
                        <li><a href="{{route('admin.settings')}}">Admin User</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">

                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>