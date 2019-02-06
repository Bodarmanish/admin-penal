
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Userdetailes</title>
    <style type="text/css">
       .help-inline{
                       color: red !important;
                  }

    </style>
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
    <script>
             var x = $.noConflict();
    </script>
    <script  src="{{ asset('dashbord/vendors/jquery/dist/jquery.min.js') }}"></script>
      
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
    <link rel="stylesheet" href="{{ asset('css/backend_css/jquery.datetimepicker.min.css') }}">


    <!-- Custom Theme Style -->
    <link href="{{ asset('dashbord/build/css/custom.min.css') }}" rel="stylesheet">
</head>
  <!-- body conten -->
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-paw"></i> <span>9Brainz Admin</span></a>
            </div>

             <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('image/logo12.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>9Brainz Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/admin/dashboard')}}"">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Apps <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/admin/show_application') }}">Show Apps</a></li>
                      
                    </ul>
                  </li>
                  </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
             <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" href="{{ url('/admin/settings') }}" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{url ('/logout') }}"">
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
                    <img src="{{asset('image/logo12.jpg')}}" alt="">9Brainz Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a title=""  href="{{ url('/admin/settings') }}"><i class="icon icon-cog "></i><span>Settings</span></a>
                    </li>
                    <li><a href="{{url ('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<div class="right_col" role="main" style="min-height: 3971px;">
  <div class="row">        
  <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h1>Edit Userdata<small></small></h1>

<!-- main content -->
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit_user/'.$appusers->id) }}" name="edit_application" id="edit_application" novalidate="novalidate">
              {{ csrf_field()}}
              
              <div class="control-group">
                <label class="control-label">Device Id</label>
                <div class="controls">
                  <input type="text" name="Device Id" id="Device Id" style="width: 300px;height: 30px;" value="{{ $appusers->Device_Id }}" disabled >
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Application Name</label>
                <div class="controls">
                  <input type="text" name="appName" id="appName" style="width: 300px;height: 30px;" value="{{ $appusers->name }}" disabled >
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Country</label>
                <div class="controls">
                  <input type="text" name="Country" id="Country" style="width: 300px;height: 30px;" value="{{ $appusers->Country }}" placeholder="Enter Country">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Device Type</label>
                <div class="controls">
                  <input type="text" name="DeviceType" id="DeviceType" style="width: 300px;height: 30px;" value="{{ $appusers->Device_Type }}" placeholder="Enter Device Type">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">OS Version</label>
                <div class="controls">
                  <input type="text" name="OSVersion" id="OSVersion" style="width: 300px;height: 30px;" value="{{ $appusers->OS_Version }}" placeholder="Enter Application Link">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">App Version</label>
                <div class="controls">
                  <input type="text" name="AppVersion" id="AppVersion" style="width: 300px;height: 30px;" value="{{ $appusers->App_Version }}" placeholder="Enter App Version">
                </div>
              </div>
              
              <div class="control-group" >
                <label class="control-label">Is Full Access?</label>
                <div class="controls">
                <input type="checkbox" name="fullAccess" id="fullAccess" value="{{ $appusers->Is_Full_Access }}" >
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Purchase Ads?</label>
                <div class="controls">
                <input type="checkbox" name="PurchaseAds" id="PurchaseAds" value="{{ $appusers->Purchase_Ads }}" >
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Purchase Watermark?</label>
                <div class="controls">
                <input type="checkbox" name="PurchaseWatermark" id="PurchaseWatermark" value="{{ $appusers->Purchase_Watermark }}">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Purchase Subscription?</label>
                <div class="controls">
                <input type="checkbox" name="PurchaseSubscription" id="PurchaseSubscription" value="{{ $appusers->Purchase_Subscription }}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Purchase Unlimeted?</label>
                <div class="controls">
                <input type="checkbox" name="unlimeted" id="unlimeted" value="{{ $appusers->Purchase_Unlimited }}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Last Date Of Subscription</label>
                <div class="controls">
                 <input type="text" name="datetime" id="datetime" autocomplete="off" style="width: 300px;height: 30px;" placeholder="Enter Date and Time">{{ $appusers->Last_Date_Of_Subscription }}</input>
                </div>
              </div>
              
              <div class="form-actions" style="margin-top: 10px;">
                <input type="submit" value="Save" class="btn btn-success">
                <a class="btn btn-default" href="{{ url('/admin/dashboard')}}">Cancel</a>
              </div>
              
          </form>
<!-- end  -->
</div>
</div>
</div>              
</div>
              
        <footer>
          <div class="pull-right"><b> 2019 &copy; 9Brainz Apps Panel. Brought to you by <a href="https://9brainz.com/" style="color: skyblue;">9brainz.com</a> </b>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->


    

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
    
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('dashbord/build/js/custom.min.js') }}"></script>
    <script src="{{ asset('dashbord/build/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/backend_js/allvelidetion.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.datetimepicker.full.js') }}"></script>



  </body>
</html>



