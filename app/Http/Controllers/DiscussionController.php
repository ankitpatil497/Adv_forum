<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Discussion;
use App\Reply;
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
            'title'=>'required',
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

        session()->flash('success','Discussion Created Successfully');
        return redirect()->route('discussion',['slug'=>$discussion->slug]);
    }

    public function show($slug){
        // return $slug;
        return view('discussion.show')->with('discussion',Discussion::where('slug',$slug)->first());
    }

    public function reply($id)
    {
        // return Discussion::find($id);

        Reply::create([
            'user_id'=>Auth::id(),
            'discussion_id'=>$id,
            'content'=>request()->content
        ]);

        session()->flash('success','Replied to Discussion');

        return redirect()->back();
    }
}