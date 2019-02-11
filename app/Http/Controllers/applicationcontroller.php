<?php

namespace App\Http\Controllers;

use App\Application;
use App\application_caterory;
use App\appusers;
use Auth;
use Egulias\EmailValidator\Validation\isValid;
use Illuminate\Http\Concerns\hasFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Image;
use Session;


class applicationcontroller extends Controller
{
 
    public function add_application(Request $request)
    {
        
    	if ($request->isMethod('post'))
        {
    	 	$data = $request->all();
            $select = $data['Platform'];
            $Platform = DB::table('application_caterories')->get();
            foreach ($Platform as $selectid) 
            {
                
                if($select == $selectid->name)
                    {
                        $id = $selectid->id;
                    }        
            }
            $Application = new Application;
    	 	$Application->Appcategory_id = $id;
            $Application->platform = $data['Platform'];
    	 	$Application->name = $data['name'];
    	 	$Application->Version = $data['Version'];
    	 	$Application->title = $data['title'];
    	 	$Application->message = $data['message'];
    	 	$Application->link = $data['link'];
            $Application->email = $data['email'];
            $Application->format = $data['format'];
            $Application->contact_format = $data['contact_format'];
            $Application->devloper_site = $data['devloper_site'];
            $Application->devloper_name = $data['devloper_name'];
            $Application->devloper_apps = $data['devloper_apps'];
            $Application->generated_app = $data['generated_app'];

            if(empty($data['forceupdate'])) 
            {
                $data['forceupdate'] = 'NO';
            }
            $Application->force_update = $data['forceupdate'];
            if(empty($data['onlybanner']))
            {
                $data['onlybanner'] = 'NO';
            }               
            $Application->only_banner = $data['onlybanner'];
            
    	 	//upload image
    	 	if($request->hasFile('icon'))
            {
    	 		$icon_tem = Input::file('icon');
    			
    	 		if($icon_tem->isValid()){
    	 			$extension = $icon_tem->getClientOriginalExtension();
    	 			$filename = rand(111,99999).'.'.$extension;
    	 			$icon_path = public_path('/icon/'.$filename);
    	 			Image::make($icon_tem)->save($icon_path);
    				$Application->icon = $filename;
    	 		}
    	 	}
    	 	if(empty($Application->icon))
            {
    	 		$Application->icon ='';
    	 	}
    		//end upload image
    		$Application->save();
    		return redirect('/admin/show_application')->with('message_add','Application Added Succcessfully!');
    	}

        $categories = DB::table('application_caterories')->get();
    	$category_dropdown = "<option value='' disabled></option>";
    	foreach ($categories as $cat) 
        {
    		$category_dropdown .= "<option value='".$cat->name."'>".$cat->name."</option>";
    	
    	}
        //echo "<pre>";print_r($category_dropdown);die();

         return view('admin.application.add_application')->with(compact('category_dropdown'));
    }     
    	
    
    public function show_application(Request $request)
    {
    	$Applications = Application::get();
                        
        $users = DB::table('appusers')
                     ->Join('applications', 'applications.id', '=', 'appusers.app_id')
                     ->select(DB::raw('count(*) as all_user, name'))
                     ->whereNull('deleted_at')
                     ->where('app_id', '<>', 1)
                     ->groupBy('app_id')
                     ->get();
                   
        return view('admin.application.show_application')->with(compact('Applications','users'));
    }

    public function edit_application(Request $request,$id=null)
    {   //post method    
        if($request->isMethod('post'))
        {
            $data = $request->all();

            if($request->hasFile('icon'))
            {
                $icon_tem = Input::file('icon');
                
                if($icon_tem->isValid())
                {
                    $extension = $icon_tem->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $icon_path = public_path('/icon/'.$filename);
                    Image::make($icon_tem)->save($icon_path);
                }
            }
            else
            {
                $filename = $data['current_icon'];
            }

            if(empty($data['force_update'])) 
                {
                    $data['force_update'] = 'NO';
                }
            if(empty($data['only_banner']))
                {
                    $data['only_banner'] = 'NO';
                }
            $select = $data['Platform'];
            $Platform = DB::table('application_caterories')->get();
            foreach ($Platform as $selectid) 
            {
                
                if($select == $selectid->name)
                    {
                        $catid = $selectid->id;
                    }        
            }
            Application::where(['id'=>$id])->update([
                'Appcategory_id'=>$catid,
                'platform'=>$data['Platform'],
                'name'=>$data['name'],
                'Version'=>$data['Version'],
                'title'=>$data['title'],
                'message'=>$data['message'],
                'link'=>$data['link'],
                'email'=>$data['email'],
                'format'=>$data['format'],
                'contact_format'=>$data['contact_format'],
                'devloper_site'=>$data['devloper_site'],
                'devloper_name'=>$data['devloper_name'],
                'devloper_apps'=>$data['devloper_apps'],
                'generated_app'=>$data['generated_app'],
                'force_update'=>$data['force_update'],
                            
                'only_banner'=>$data['only_banner'],
                'icon'=>$filename]);

            return redirect('/admin/show_application')->with('message_add','Application Edit Succcessfully!');
    
            
        }

        //get method
        $Applications = Application::where(['id'=>$id])->first();
        $categories = DB::table('application_caterories')->get();
        $category_dropdown = "<option value='' disabled></option>";
        foreach ($categories as $cat) 
        {
            if ($Applications->platform == $cat->name) 
            {
                $selected = 'selected';
            }
            else
            {
                $selected = "";
            }
           $category_dropdown .= "<option value='".$cat->name."' ".$selected.">".$cat->name."</option>";
        
        }
        
                
        return view('admin.application.edit_application')->with(compact('Applications','category_dropdown'));
    }


}







