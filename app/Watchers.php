<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchers extends Model
{
    protected $fillable=['user_id','discussion_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function discussion(){
        return $this->belongsTo(Discussion::class);
    }
}

