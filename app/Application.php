<?php

namespace App;
use App\application_caterory;
use App\appusers;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'Appcategory_id', 'platform','name','Version','title','message','link','email','format','contact_format','devloper_site','devloper_name','devloper_apps',
    ];
    public function appcaterory()
    {
    	return $this->belongsTo(application_caterory::class);
    }

    public function users()
    {
    	return $this->hasMany(appusers::class);
    }


}
