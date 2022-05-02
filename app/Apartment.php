<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = ['user_id', 'title', 'slug', 'price', 'num_guest', 'num_rooms', 'num_beds', 'num_bath', 'square_footage', 'preview', 'visible', 'description'];

    public function user() {    
        return $this->belongsTo('App\User');
    }
    
    public function plans() {
        return $this->belongsToMany('App\Plan')->withPivot('date_start', 'date_end');
    }

    public function services() {
        return $this->belongsToMany('App\Service');
    }

    public function location() {    
        return $this->hasOne('App\Location');
    }
    
    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function analytics() {
        return $this->hasMany('App\Analytic');
    }
}
