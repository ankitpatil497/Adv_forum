<?php

namespace App\Http\Controllers;

use App\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    public function likes($id){
        // return Auth::id();
        Likes::create([
            'reply_id'=>$id,
            'user_id'=>Auth::id(),
        ]);

        session()->flash('success','Liked.......');
        return redirect()->back();
    }

    public function unlikes($id){
        $d=Likes::where('reply_id',$id)->where('user_id',Auth::id());
        $d->delete();

        session()->flash('success','Unlike.....');

        return redirect()->back();
    }
}
