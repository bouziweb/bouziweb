<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    protected $fillable=[
        'user_id','title','subTitle','description','fileName','created_at'
      ];

    public function user(){
        
        return $this->belongsTo(('App\User'));
    }

    public function account(){
        return $this->belongsTo('App\account');
    }
}
