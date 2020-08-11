<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Discussion;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function show(){

        switch (request('filter')) {
            case 'me':
                $result=Discussion::where('user_id',Auth::id())->paginate(3);
            break;
            
            case 'solved':
                $ans=array();

                foreach(Discussion::all() as $d){
                    if($d->hasBestAns()){
                        array_push($ans,$d);
                    }
                }

                $result=new Paginator($ans,3);
                
            break;

            case 'unsolved':
                $unans=array();

                foreach(Discussion::all() as $d){
                    if(!$d->hasBestAns()){
                        array_push($unans,$d);
                    }
                }

                $result=new Paginator($unans,3);
                
            break;

            default:
                $result=Discussion::orderby('created_at','desc')->paginate(3);
            break;
        }

        return view('Forum',['discussions'=>$result]);
    }

    public function chanel($slug){
        $dicussion=Channel::where('slug',$slug)->first();
        return view('chanel')->with('discussions',$dicussion->discussion()->paginate(5));
    }
}
