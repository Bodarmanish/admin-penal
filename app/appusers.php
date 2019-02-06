<?php

namespace App;

use App\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class appusers extends Model
{
     
	 use SoftDeletes;
     protected $table = 'appusers';
	 protected $primaryKey = 'Device_Id';    //protected $device = ['Device_Id'];
     //protected $device = ['app_id'];
     protected $dates = ['deleted_at'];



        public function apps()
        {
            return $this->belongsTo(Application::class);
        }
}
