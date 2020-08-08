<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{

    protected $fillable=[
        'user_id','reply_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->belongsTo(Reply::class);
    }
}
