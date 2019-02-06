@extends('sitedesign.adminlayout.admin_design')

    <title>All Application</title>
@section('maincont')


    <strong style="float: right;margin-right: 20px; ">
      <a href="{{ url('/admin/add_application') }}" class="btn btn-primary" style="height:30px;">ADD APP</a>
    </strong>    
    <div style="float: right;"> 
      <select class="Application"  name="plateform" style="width: 315px;font-style: bold;height:30px ">
        <option class="op1" ="op1" value="All" selected="selected" >All Platform</option>
        <option class="op2" value="iOS">iOS</option>
        <option class="op3" value="Android">Android</option>
      </select>
    </div>
      
    
        
  </div>
  <!-- table -->
<div class="right_col" role="main">

<div class="row">        
  <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2> All Application<small></small></h2>

                        
                      @if(session()->has("message_add"))
                          <div id="gritter-notice-wrapper">
                              <div id="gritter-item-1" class="gritter-item-wrapper" style="float :right; width: 250px;opacity: 0.7;">
                                 <div class="gritter-top"></div>
                                  <div class="gritter-item" style="background:blue">
                                   <div class="gritter-with-image">
                                     <b> <span class="gritter-title">{{session()->get("message_add")}}</span></b>
                                    </div>
                                  <div style="clear:both"></div>
                                </div>
                              <div class="gritter-bottom"></div>
                            </div>
                          </div>    
                      @endif
                      @if(session()->has("message_delete"))
                          <div id="gritter-notice-wrapper">
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
                                  <th>Apps Id</th>
                                  <th>Platform</th>
                                  <th>Application Name</th>
                                  <th>Total User</th>
                                  <th>Apps Version </th>
                                  <th>is Banner?</th>
                                  <th>Icon</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>


                              <tbody>
                                @foreach($Applications as $apps)

                                  <tr class="gradeX">

                                    <td >{{$apps->id}}</td>
                                    <td class="col">{{$apps->platform}}</td>
                                    <td >{{$apps->name}}</td>
                                    
                                    <th>@foreach ($users as $user)
                                          @if($user->name == $apps->name)
                                            {{$user->all_user}}
                                          @elseif(empty($user->all_user))
                                            {{'0'}}
                                          @endif

                                        @endforeach</th>
                                    
                                    <td >{{$apps->Version}}</td>
                                    <td >{{$apps->only_banner}}</td>
                                    <td >
                                     <img class="appimage" src="{{asset('/icon/'.$apps->icon)}}" style="height: 40px;width: 40px">
                                    </td>
                                    <td ><div style="margin-left:0px;" class="fr"> 
                                      <a href="/admin/edit_application/{{$apps->id}}" class="btn btn-primary btn-mini">Edit</a>
                                      <a href="{{ $apps->link }}" target="_blank" class="btn btn-success btn-mini">Link</a>
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
