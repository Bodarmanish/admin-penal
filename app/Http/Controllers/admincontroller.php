<?php

namespace App\Http\Controllers;

use App\Application;
use App\User;
use App\appusers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class admincontroller extends Controller
{

    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->input();
  
           if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
           {
                Session::put('adminSession',$data['email']);
                return redirect('/admin/dashboard');
            }
            else
            {
                return redirect('/admin')->with('flash_message_error','Invalid Username Or Password');
            }
          
        }
        return view('admin.login');
    }


    public function dashboard()
    {
        
        $appusers = DB::table('appusers')
                        ->Join('applications', 'applications.id', '=', 'appusers.app_id')
                        ->select('appusers.id','appusers.Device_Id','appusers.Country','applications.platform','applications.name','appusers.Country','appusers.Device_Type','appusers.OS_Version','appusers.App_Version','appusers.Is_Full_Access','appusers.Purchase_Ads','appusers.Purchase_Watermark','appusers.Purchase_Unlimited','appusers.Purchase_Subscription','appusers.Last_Date_Of_Subscription','appusers.created_at','appusers.updated_at','appusers.id')
                        ->whereNull('deleted_at')
                        ->get();
        $categories = DB::table('applications')->get();                    
        $category_dropdown = "<option value='All App User'>All App User</option>";
        foreach ($categories as $cat) 
        {
            
           $category_dropdown .= "<option value='".$cat->name."'>[".$cat->platform."]".$cat->name."</option>";
        
        }
               
        return view('admin.dashboard')->with(compact('appusers','category_dropdown'));

    }

    public function edit_user(Request $request,$id=null)
    {

         if($request->isMethod('post'))
        {
            $data = $request->all();
            if(empty($data['fullAccess'])){$data['fullAccess'] = 'no';}
            if(empty($data['PurchaseAds'])){$data['PurchaseAds'] = 'no';}
            if(empty($data['PurchaseWatermark'])){$data['PurchaseWatermark'] = 'no';}
            if(empty($data['PurchaseSubscription'])){$data['PurchaseSubscription'] = 'no';}
            if(empty($data['unlimeted'])){$data['unlimeted'] = 'no';}
            if(empty($data['datetime'])){$data['datetime'] = 'No Date';}

            appusers::where(['id'=>$id])->update(['Device_Type'=>$data['DeviceType'],'Country'=>$data['Country'],'OS_Version'=>$data['OSVersion'],'App_Version'=>$data['AppVersion'],'Is_Full_Access'=>$data['fullAccess'],'Purchase_Ads'=>$data['PurchaseAds'],'Purchase_Watermark'=>$data['PurchaseWatermark'],'Purchase_Subscription'=>$data['PurchaseSubscription'],'Purchase_Unlimited'=>$data['unlimeted'],'Last_Date_Of_Subscription'=>$data['datetime']]);
            return redirect('/admin/dashboard')->with('message_edit','UserDetail Edit Succcessfully!');
        }


        $appusers = DB::table('appusers')
                        ->Join('applications', 'applications.id', '=', 'appusers.app_id')
                        ->select('appusers.id','appusers.Device_Id','appusers.Country','applications.name','appusers.Country','appusers.Device_Type','appusers.OS_Version','appusers.App_Version','appusers.Is_Full_Access','appusers.Purchase_Ads','appusers.Purchase_Watermark','appusers.Purchase_Unlimited','appusers.Purchase_Subscription','appusers.Last_Date_Of_Subscription','appusers.created_at','appusers.updated_at','appusers.id')
                        ->whereNull('deleted_at')
                        ->where(['appusers.id'=>$id])
                        ->first();
       
        
        return view('admin.edituser')->with(compact('appusers'));

    }
    
    public function deleteuser($id=null)
    {
        appusers::where(['id'=>$id])->delete();
        return redirect()->back()->with('message_delete','User Deleted Succcessfully!');
    }

    public function logout()
    {
        session::flush();
        return redirect('/admin')->with('flash_message_logout','Logout Successfully!');

    }
    public function settings()
    {
        if(Session::has('adminSession'))
        {
           //perform all settings task
        }
        else
        {
         return redirect('/admin')->with('flash_message_logout','Please Login To Access');
        }
        return view ('admin.settings');
    }

    public function chkpassword(Request $request)
    {
            $data = $request->all();
            $current_password = $data['current_Pwd'];
            
            $check_password = DB::table('users')->first();
            //dd($check_password);
            if(Hash::check($current_password,$check_password->password))
            {
                echo "true"; die;
            }
            else
            {
                echo "false"; die;
            }
    }
    public function updatepassword(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            
            $check_password = User::where(['email' => Auth::user()->email])->first();
            //dd($check_password);
            $current_password = $data['current_Pwd'];

            if(Hash::check($current_password,$check_password->password))
            {
                $password = bcrypt($data['new_Pwd']);
                User::where(['email' => $check_password->email])->Update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_update','Password Update Successful');
            }
            else
            {
                return redirect('/admin/settings')->with('flash_message_update',' Current Password Is Incorrect ');
            }

        }

    }
}
 