<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site_commerce extends Model
{
    protected $fillable = [
        'user_id', 'name_site', 'username','password'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

}
