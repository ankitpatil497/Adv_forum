<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Notifications\NewreplyAdded;
use Illuminate\Support\Facades\Notification as Notification;
use App\Reply;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function reply($id)
    {
        // return Discussion::find($id);

        $reply=Reply::create([
            'user_id'=>Auth::id(),
            'discussion_id'=>$id,
            'content'=>request()->content
        ]);

        $reply->user->points +=25;

        $reply->user->save();

        $watcher=array();

        $d=Discussion::find($id);

        foreach($d->watchers as $w):

            array_push($watcher,User::find($w->user_id));

        endforeach;
        // dd($watcher);

        Notification::send($watcher,new NewreplyAdded($d));

        Session()->flash('success','Replied to Discussion');

        return redirect()->back();
    }
    public function edit($id){
        return view('replies.edit')->with('reply',Reply::find($id));
    }

    public function update($id){
        $this->validate(request(),['content'=>'required']);

        $reply=Reply::find($id);
        $reply->content=request()->content;
        $reply->save();

        Session()->flash('success','Discussion Update Suceessfully');
        
        return redirect()->route('discussion',['slug'=>$reply->discussion->slug]);
    }
}
