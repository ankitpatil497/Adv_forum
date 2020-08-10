<?php

namespace App\Http\Controllers;

use App\Watchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchersController extends Controller
{
    public function watch($id){
        Watchers::create([
            'discussion_id'=>$id,
            'user_id'=>Auth::id()
        ]);

        session()->flash('suceess','You are watching this Discussion');
        return redirect()->back();
    }
    public function unwatch($id){
        
        $watch=Watchers::where('discussion_id',$id)->where('user_id',Auth::id());
        $watch->delete();

        session()->flash('suceess','You are no longer watching this Discussion');
        return redirect()->back();
    }
}
