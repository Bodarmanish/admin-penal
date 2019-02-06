@extends('sitedesign.adminlayout.admin_design')
    <title>Add Application</title>

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
  <script type="text/javascript" src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>

@section('maincont')
<div class="right_col" role="main">

<div class="row">        
  <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h1> Add Application<small></small></h1>
                        
              @if(session()->has("message_add"))
            <div id="gritter-notice-wrapper">
                <div id="gritter-item-1" class="gritter-item-wrapper" style="opacity: 0.7;">
                   <div class="gritter-top"></div>
                    <div class="gritter-item" style="background:green">
                     <div class="gritter-with-image">
                        <span class="gritter-title">{{session()->get("message_add")}}</span>
                      </div>
                    <div style="clear:both"></div>
                  </div>
                <div class="gritter-bottom"></div>
              </div>
            </div>    
        @endif
                </div>      
<!-- main content -->
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add_application') }}" name="add_application" id="add_application" novalidate="novalidate">
            	{{ csrf_field()}}

              <div class="control-group">
                <label class="control-label">Select Platform</label>
                  <div class="controls">
                    <div class="select2-container" id="s2id_autogen1">
                        <select name="Platform" style="width: 300px; font-style: bold;height:30px;">   
                          <?php echo $category_dropdown; ?>
                        </select>
                    @if(session()->has("message_error"))
                    <strong style="width: 270px;background:white;margin-top:-53px;color: red;">{{session()->get("message_error")}}</strong> 
                  @endif
                    </div>
                  </div>
              </div>

              <div class="control-group">
                <label class="control-label">Application Name<b style="color: red"> *</b></label>
                <div class="controls">
                  <input type="text" name="name" id="name" style="width: 300px;height: 30px;" placeholder="Enter Application Name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Latest Version</label>
                <div class="controls">
                  <input type="text" name="Version" id="Version" style="width: 300px;height: 30px;" placeholder="Enter App Latest Version">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Ads Title</label>
                <div class="controls">
                  <input type="text" name="title" id="title" style="width: 300px;height: 30px;" placeholder="Enter Ads Title">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Ads Message</label>
                <div class="controls">
                 <textarea name="message" id="message"style="width: 300px;" placeholder="Enter Ads Message"></textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Link</label>
                <div class="controls">
                  <input type="text" name="link" id="link" style="width: 300px;height: 30px;" placeholder="Enter Application Link">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Contact Email</label>
                <div class="controls">
                  <input type="text" name="email" id="email" style="width: 300px;height: 30px;" placeholder="Enter Contact Email">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Share Format</label>
                <div class="controls">
                 <textarea name="format" id="format" style="width: 300px;" placeholder="Enter Share Format"></textarea>
                </div>
              </div>

               <div class="control-group">
                <label class="control-label">Contact Format</label>
                <div class="controls">
                 <textarea name="contact_format" id="contact_format" style="width: 300px;" placeholder="Enter Contact Format"></textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Developer Site</label>
                <div class="controls">
                  <input type="text" name="devloper_site" id="devloper_site" style="width: 300px;height: 30px;" placeholder="Enter Developer Site Link">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Developer Name</label>
                <div class="controls">
                  <input type="text" name="devloper_name" id="devloper_name" style="width: 300px;height: 30px;" placeholder="Enter Developer Name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Developer Apps</label>
                <div class="controls">
                  <input type="text" name="devloper_apps" id="devloper_apps" style="width: 300px;height: 30px;" placeholder="Enter Developer Apps">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Generated In App</label>
                <div class="controls">
                  <input type="text" name="generated_app" id="generated_app" style="width: 300px;height: 30px;"placeholder="Enter Generated App">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Apps Icon</label>
                <div class="controls">
                  <input type="file" name="icon" id="icon" style="width: 300px;">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label"> Is Force Updates?</label>
                <div class="controls">
                <input type="checkbox" name="forceupdate" id="forceupdate"  value="YES">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label"> Is Only Banner?</label>
                <div class="controls">
                <input type="checkbox" name="onlybanner" id="onlybanner" value="YES">
                </div>
              </div>


              <div class="form-actions" style="margin-top: 10px;">
                <input type="submit" value="Add Application" class="btn btn-success">
                <a class="btn btn-default" href="{{ url('admin/show_application')}}">Cancel</a>
              </div>
          </form>
          
    </div>
    </div>
</div>              
</div>
@endsection
 <!-- Custom Theme Scripts -->
    <script src="{{ asset('dashbord/build/js/jquery.validate.min.js') }}"></script>
