<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site_gestion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name_site', 'username','password'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
