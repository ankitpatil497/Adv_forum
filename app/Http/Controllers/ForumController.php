<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function show(){

        $dicussion=Discussion::orderby('created_at','desc')->paginate(3);
        return view('Forum',['discussions'=>$dicussion]);
    }
}
