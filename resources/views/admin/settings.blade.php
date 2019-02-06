@extends('sitedesign.adminlayout.admin_design')


    <title>Update Password</title>
    <style>
          .help-inline{
                       color: red !important;
                  }
          .message1{margin-bottom: ;}
        
    </style>
</style>
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
    <script>
             var x = $.noConflict();
    </script>
  <script type="text/javascript" src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
        
  
@section('maincont')
  
<div class="right_col" role="main">
  <div class="row">        
  <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h1>Update Password<small></small></h1>
<!-- main contentet -->
</div>

	
<div id="content">
  
                @if(session()->has("flash_message_update"))
                    <div id="gritter-notice-wrapper"style="width: 300px;">
                        <div id="gritter-item-1" class="gritter-item-wrapper" style="opacity: 0.7;">
                           <div class="gritter-top"></div>
                            <div class="gritter-item" style="background:red">
                             <div class="gritter-with-image">
                                <span class="gritter-title">{{session()->get("flash_message_update")}}</span>
                              </div>
                            <div style="clear:both"></div>
                          </div>
                        <div class="gritter-bottom"></div>
                      </div>
                    </div>    
                @endif
             
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/updatepass') }}" name="password_validate" id="password_validate" novalidate="novalidate">
              	{{ csrf_field() }}

                <div class="control-group">
                  <label class="control-label">Current Password</label>
                  <div class="controls">
                    <input type="password" name="current_Pwd" id="current_Pwd" />
                    <span id="chkpass"></span>
                  </div>

                  <div class="control-group">
                  <label class="control-label">New Password</label>
                  <div class="controls">
                    <input type="password" name="new_Pwd" id="new_Pwd" />
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Confirm password</label>
                  <div class="controls">
                    <input type="password" name="confirm_Pwd" id="confirm_Pwd" />
                  </div>
                </div>

                <div class="form-actions">
                  <input type="submit" value="Update Password" class="btn btn-success" style="margin-top: 10px;">
                  <a class="btn btn-default" href="{{ url('/admin/dashboard')}}" style="margin-top: 10px;">Cancel</a>
                </div>
              </form>
            </div>
          <!-- end -->
@endsection 

    
    <!-- Custom Theme Scripts -->
    <!-- <script src="{{ asset('dashbord/build/js/custom.min.js') }}"></script> -->
    <script src="{{ asset('dashbord/build/js/jquery.validate.min.js') }}"></script>

