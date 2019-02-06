<?php

namespace App\Http\Controllers;

use App\Http\Resources\usersCollection;
use App\appusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userscontroller extends Controller
{
    
    public function index()
    {
        return usersCollection::collection(appusers::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //$data = $request->all();
        $appusers = DB::table('appusers')->get();
        //dd($appusers);
        foreach ($appusers as $selectuser) 
        {
            if($request->DeviceId == $selectuser->Device_Id && $request->app_id == $selectuser->app_id){
                
                appusers::where(['Device_Id'=>$request->DeviceId])->update([
                    'Device_Id'=>$request['DeviceId'],
                    'Country'=>$request['Country'],
                    'Device_Type'=>$request['Device_Type'],
                    'OS_Version'=>$request['OS_Version'],
                    'App_Version'=>$request['App_Version'],
                    'Is_Full_Access'=>$request['Is_Full_Access'],
                    'Purchase_Ads'=>$request['Purchase_Ads'],
                    'Purchase_Watermark'=>$request['Purchase_Watermark'],
                    'Purchase_Unlimited'=>$request['Purchase_Unlimited'],
                    'Purchase_Subscription'=>$request['Purchase_Subscription'],
                    'Last_Date_Of_Subscription'=>$request['Last_Date_Of_Subscription'],
                    'app_id'=>$request['app_id'],
                         ]);
                    $update = appusers::where(['Device_Id'=>$request->DeviceId])->first();
                    return response()->json([
                                                'status'=>'Update success',
                                                'data'=>$update,
                                            ]);

            }

        }
        
            if(empty($request['Is_Full_Access'])){$request['Is_Full_Access'] = 'no';}
            if(empty($request['Purchase_Ads'])){$request['Purchase_Ads'] = 'no';}
            if(empty($request['Purchase_Watermark'])){$request['Purchase_Watermark'] = 'no';}
            if(empty($request['Purchase_Unlimited'])){$request['Purchase_Unlimited'] = 'no';}
            if(empty($request['Purchase_Subscription'])){$request['Purchase_Subscription'] = 'no';}
            if(empty($request['Last_Date_Of_Subscription'])){$request['Last_Date_Of_Subscription'] = 'No Date';}

            $data = new appusers;
            $data->Device_Id = $request->DeviceId;
            $data->Country=$request->Country;
            $data->Device_Type=$request->Device_Type;
            $data->OS_Version=$request->OS_Version;
            $data->App_Version=$request->App_Version;
            $data->Is_Full_Access=$request->Is_Full_Access;
            $data->Purchase_Ads=$request->Purchase_Ads;
            $data->Purchase_Watermark=$request->Purchase_Watermark;
            $data->Purchase_Unlimited=$request->Purchase_Unlimited;
            $data->Purchase_Subscription=$request->Purchase_Subscription;
            $data->Last_Date_Of_Subscription=$request->Last_Date_Of_Subscription;
            $data->app_id = $request->app_id;
            $data->save();
           //return "add suceess";
        return response()->json([
                                    'status'=>'add success',
                                    'data'=>$data,

                                ]);

    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Device_Id)
    {

        
        

        // if(empty($request['Is_Full_Access'])){$request['Is_Full_Access'] = 'no';}
        //     if(empty($request['Purchase_Ads'])){$request['Purchase_Ads'] = 'no';}
        //     if(empty($request['Purchase_Watermark'])){$request['Purchase_Watermark'] = 'no';}
        //     if(empty($request['Purchase_Unlimited'])){$request['Purchase_Unlimited'] = 'no';}
        //     if(empty($request['Purchase_Subscription'])){$request['Purchase_Subscription'] = 'no';}
        //     if(empty($request['Last_Date_Of_Subscription'])){$request['Last_Date_Of_Subscription'] = 'No Date';}

        // $data = new appusers;
        // $data->Device_Id = $request->Device_Id;
        // $data->Country=$request->Country;
        // $data->Device_Type=$request->Device_Type;
        // $data->OS_Version=$request->OS_Version;
        // $data->App_Version=$request->App_Version;
        // $data->Is_Full_Access=$request->Is_Full_Access;
        // $data->Purchase_Ads=$request->Purchase_Ads;
        // $data->Purchase_Watermark=$request->Purchase_Watermark;
        // $data->Purchase_Unlimited=$request->Purchase_Unlimited;
        // $data->Purchase_Subscription=$request->Purchase_Subscription;
        // $data->Last_Date_Of_Subscription=$request->Last_Date_Of_Subscription;
        // $data->app_id = $request->app_id;
        // $data->save();
        // //return "add suceess";
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
