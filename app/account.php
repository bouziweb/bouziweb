<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $fillable=[
      'user_id','Post_id','photo_id','follower_id','information_id',
    ];
    public function user(){

        return $this->belongsTo(('App\User'));
    }
    public function account(){
      return $this->belongsTo('App\account');
  }

  
}

