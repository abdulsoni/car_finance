<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class CarAddress extends Model
{
    protected $table = 'caraddress';
    public $primaryKey ='id';
    function users(){
        return $this->belongsTo('App\User','sessionId', 'sessionId');
    }
}
