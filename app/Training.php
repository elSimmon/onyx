<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App/User;

class Training extends Model
{
    protected $fillable = [
      'course',
      'center',
      'payment_status',
      'qualification',
      'address',
      'preferred_start_date',
      'user_id',
    ];

    public function user(){
      return $this->belongsTo('App/User');
    }
}
