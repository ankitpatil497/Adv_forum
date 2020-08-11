<?php

namespace App\Http\Controllers;

use App\Watchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

class WatchersController extends Controller
{
    public function watch($id){
        Watchers::create([
            'discussion_id'=>$id,
            'user_id'=>Auth::id()
        ]);

        Session()->flash('success','You are watching this Discussion');
        return redirect()->back();
    }
    public function unwatch($id){
        
        $watch=Watchers::where('discussion_id',$id)->where('user_id',Auth::id());
        $watch->delete();

        Session()->flash('info','You are no longer watching this Discussion');
        return redirect()->back();
    }
}
