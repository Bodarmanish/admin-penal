@extends('sitedesign.adminlayout.admin_design')

<title>9Brainz Admin</title>

@section('maincont')

<div class="right_col" role="main">
  <div class="row">        
  <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2> Show All Users<small></small></h2>
                        
                      <div style="float: right;"> 
                        <select class="user"  name="plateform" style="width: 315px; height: 25px; font-style: bold;">
                                         <?php echo $category_dropdown; ?>
                        </select>
                      </div>
                      @if(session()->has("message_edit"))
                          <div id="gritter-notice-wrapper">
                              <div id="gritter-item-1" class="gritter-item-wrapper" style="float :right; width: 250px;opacity: 0.7;">
                                 <div class="gritter-top"></div>
                                  <div class="gritter-item" style="background:blue">
                                   <div class="gritter-with-image">
                                     <b> <span class="gritter-title">{{session()->get("message_edit")}}</span></b>
                                    </div>
                                  <div style="clear:both"></div>
                                </div>
                              <div class="gritter-bottom"></div>
                            </div>
                          </div>    
                      @endif
                @if(session()->has("message_delete"))
                    <div id="gritter-notice-wrapper"style="width: 300px;">
                        <div id="gritter-item-1" class="gritter-item-wrapper" style="opacity: 0.7;">
                           <div class="gritter-top"></div>
                            <div class="gritter-item" style="background:red">
                             <div class="gritter-with-image">
                                <span class="gritter-title">{{session()->get("message_delete")}}</span>
                              </div>
                            <div style="clear:both"></div>
                          </div>
                        <div class="gritter-bottom"></div>
                      </div>
                    </div>    
                @endif
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            
                            <table id="datatable-keytable" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th>Platform</th>
                                  <th>Application</th>
                                  <th>Country</th>
                                  <th>Device</th>
                                  <th>Full Access</th>
                                  <th>Purchase Adds</th>
                                  <th>Purchase Watermark</th>
                                  <th>Purchase Unlimited</th>
                                  <th>is Subscribed?</th>
                                  <th>Last Date Subscription</th>
                                  <th>Register</th>
                                  <th>Last Active</th>
                                  <th >Actions</th>
                                </tr>
                              </thead>


                              <tbody>
                                @foreach($appusers as $apps)
                                  <tr class="gradeX">
                                  
                                    <td >{{$apps->platform}}</td>
                                    <td class="col" >{{$apps->name}}</td>
                                    <td >{{$apps->Country}}</td>
                                    <td >{{$apps->Device_Type}}</td>
                                    <td >{{$apps->Is_Full_Access}}</td>
                                    <td >{{$apps->Purchase_Ads}}</td>
                                    <td >{{$apps->Purchase_Watermark}}</td>
                                    <td >{{$apps->Purchase_Unlimited}}</td>
                                    <td >{{$apps->Purchase_Subscription}}</td>
                                    <td >{{$apps->Last_Date_Of_Subscription}}</td>
                                    <td >{{$apps->created_at}}</td>
                                    <td >{{$apps->updated_at}}</td>
                                    <td style=" line-height: 40px;"><div style="margin-left:-50px;" class="fr"> 
                                      <a href="{{'/admin/edit_user/'.$apps->id }}"><img style=" height:25px;margin-left: 50px;" src="{{asset('/image/bachend_image/edit.ico')}}"></a>
                                      <a href="{{'/admin/deleteuser/'.$apps->id }}"><img style="position:relative;height:30px;" src="{{asset('/image/bachend_image/delete.ico')}}"></a>
                                    </td>   
                                  </tr>
                                @endforeach
                             </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
</div>
</div>              
</div>           
@endsection              


       

    