<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentTime extends Model
{
    protected $table = 'employmenttime';
    function users(){
        return $this->belongsTo('App\User','sessionId', 'sessionId');
    }
}
