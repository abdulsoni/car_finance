<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalSource extends Model
{
    
    public $table = 'externalSources';
    public $primaryKey = 'id';
    public $timestamp = true;

    public function usersExternal()
    {
        return $this->belongsTo('App\User','apiKey');
    }
}
