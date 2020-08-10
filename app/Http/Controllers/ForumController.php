<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Discussion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function show(){

        $dicussion=Discussion::orderby('created_at','desc')->paginate(3);
        return view('Forum',['discussions'=>$dicussion]);
    }

    public function chanel($slug){
        $dicussion=Channel::where('slug',$slug)->first();
        return view('chanel')->with('discussions',$dicussion->discussion()->paginate(5));
    }
}
