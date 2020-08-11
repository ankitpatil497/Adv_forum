<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Discussion extends Model
{
    protected $fillable=[
        'title','content','user_id','channel_id','slug'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function channel(){
        return $this->belongsTo(Channel::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function watchers(){
        return $this->hasMany(Watchers::class);
    }

    public function is_watched_by_auth_user(){

        $id=Auth::id();

        $watcher_id=array();

        foreach($this->watchers as $watch):
            array_push($watcher_id,$watch->user_id);
        endforeach;
        
        if(in_array($id,$watcher_id)){
            return true;
        }
        else{
            return false;
        }
    }


    public function hasBestAns(){
        $result=false;

        foreach($this->replies as $reply):
        
            if($reply->best_answer){
                $result=true;
                break;
            }     
        endforeach;
        return $result;
    }

}
