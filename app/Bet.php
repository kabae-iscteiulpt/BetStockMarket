<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $fillable = [
        'symbol', 'amount', 'user_id'
      ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
