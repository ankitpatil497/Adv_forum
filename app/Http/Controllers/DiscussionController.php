<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Discussion;
use App\Notifications\NewreplyAdded;
use App\Reply;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DiscussionController extends Controller
{
    public function create(){
        return view('discuss');
    }

    public function store (){
        $this->validate(request(),[
            'channel_id'=>'required',
            'title'=>'required|unique:discussions',
            'content'=>'required'
        ]);
        $r=request();
        $discussion=Discussion::create([
            'title'=>$r->title,
            'content'=>$r->content,
            'channel_id'=>$r->channel_id,
            'user_id'=>Auth::id(),
            'slug'=>Str::slug($r->title)
        ]);

        Session()->flash('success','Discussion Created Successfully');

        return redirect()->route('discussion',['slug'=>$discussion->slug]);
    }

    public function show($slug){

        $discussion=Discussion::where('slug',$slug)->first();
        $best_ans=$discussion->replies()->where('best_answer',1)->first();
        return view('discussion.show')->with('discussion',$discussion)->with('best_ans',$best_ans);
    }

   

    public function best_answer($id){

        $reply=Reply::find($id);

        $reply->best_answer=1;
        $reply->save();
        $reply->user->points +=100;

        $reply->user->save();
        Session()->flash('success','Reply has been mark as best answer');

        return redirect()->back();
    }

    public function edit($slug){
        return view('discussion.edit')->with('discussion',Discussion::where('slug',$slug)->first());
    }

    public function update($id){
        $this->validate(request(),['content'=>'required']);

        $d=Discussion::find($id);
        $d->content=request()->content;
        $d->save();

        Session()->flash('success','Discussion Update Suceessfully');
        return redirect()->route('discussion',['slug'=>$d->slug]);

    }
}
