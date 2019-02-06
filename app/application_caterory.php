<?php

namespace App;

use App\Application;
use Illuminate\Database\Eloquent\Model;

class application_caterory extends Model
{

	protected $table = 'application_caterories';
	protected $fillable = [
        'name',
    ];

    public function application()
    {
    	return $this->hasMany(Application::class);
    }
}
