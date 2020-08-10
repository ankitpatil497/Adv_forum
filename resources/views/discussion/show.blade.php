@extends('layouts.app')

@section('content')
<div class="card border-dark mb-4">
     
    <div class="card-header">
        <img height="40px" width="40px" style="border-radius: 50%" src="{{Gravatar::src($discussion->user->email )}}" alt="">

            <span class=" ml-2">
                {{$discussion->user->name}}  &nbsp;
                {{$discussion->created_at->diffForHumans()}}
            </span> 
            @if (!$discussion->is_watched_by_auth_user())
                <a href="{{route('dicussion.watch',['id'=>$discussion->id])}}" class="btn btn-outline-dark float-right btn-sm">Watch</a>
            @else
                <a href="{{route('dicussion.unwatch',['id'=>$discussion->id])}}" class="btn btn-outline-dark float-right btn-sm">UnWatch</a>
            @endif

    </div>

    <div class="card-body text-dark">
        <h4 class="text-center">
            <b>{{$discussion->title}}</b>
        </h4>
        <hr>
        <p class="text-center">
            {!!$discussion->content,80!!}
        </p>
    </div>
    
    <div class="card-footer">
        <span>
            {{$discussion->replies->count()}} Replies
        </span>
        <a href="{{route('channel',['slug'=>$discussion->channel->slug])}}" class="btn btn-outline-secondary float-right btn-sm">{{$discussion->channel->name}}</a>
    </div>

    
</div>

@foreach ($discussion->replies as $reply)
    <div class="card mb-4">
        
        <div class="card-header">
            <img height="40px" width="40px" style="border-radius: 50%" src="{{Gravatar::src($reply->user->email )}}" alt="">

                <span class=" ml-2">
                    {{$reply->user->name}}  &nbsp;
                    {{$reply->created_at->diffForHumans()}}
                </span> 

        </div>

        <div class="card-body text-dark">

            <p class="text-center">
                {{$reply->content,80}}
            </p>
        </div>

        <div class="card-footer">
            @if ($reply->is_liked_by_auth_user())
                <a href="{{route('reply.unlike',$reply->id)}}" class="btn btn-outline-danger btn-sm">Unlike<span class="badge">{{$reply->likes->count()}}</span></a>
            @else
                <a href="{{route('reply.like',$reply->id)}}" class="btn btn-outline-success btn-sm">Like<span class="badge">{{$reply->likes->count()}}</span></a>
            @endif
        </div>
    </div>
@endforeach

<div class="card">
    <div class="card-body text-dark">
       @if (Auth::check())
        <form action="{{route('dicussion.reply',$discussion->id)}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="content">Leave a reply...</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <button class="btn btn-success float-right" type="submit">Reply</button>
            </form>
       @else
           <div class="text-center">
               <h2>Sign in to Leave the message</h2>
           </div>
       @endif
    </div>
</div>
@endsection

