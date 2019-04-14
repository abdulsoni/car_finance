<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public $table = 'wishlists';
    public $primaryKey = 'id';
    public $timestamp = true;

    public function users()
    {
        return $this->belongsTo('App\User','uId');
    }
}
