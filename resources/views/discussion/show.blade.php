@extends('layouts.app')

@section('content')
<div class="card border-dark mb-4">
     
    <div class="card-header">
        <img height="40px" width="40px" style="border-radius: 50%" src="{{Gravatar::src($discussion->user->email )}}" alt="">

            <span class=" ml-2">
                {{$discussion->user->name}}  &nbsp;
                {{$discussion->created_at->diffForHumans()}}
                ({{$discussion->user->points}})
            </span> 
            @if ($discussion->hasBestAns())
                <span class="btn btn-success btn-sm float-right">closed</span>
            @else
                <span class="btn btn-danger btn-sm float-right">open</span>
            @endif
            @if (Auth::id()==$discussion->user->id)
                @if (!$best_ans)
                    <a href="{{route('discussion.edit',['slug'=>$discussion->slug])}}" style="margin-right: 8px" class="btn btn-outline-info float-right btn-sm">Edit</a>
                @endif
            @endif
            @if (!$discussion->is_watched_by_auth_user())
                <a href="{{route('dicussion.watch',['id'=>$discussion->id])}}" style="margin-right: 8px" class="btn btn-outline-dark float-right btn-sm">Watch</a>
            @else
                <a href="{{route('dicussion.unwatch',['id'=>$discussion->id])}}" style="margin-right: 8px" class="btn btn-outline-dark float-right btn-sm">UnWatch</a>
            @endif

    </div>

    <div class="card-body text-dark">
        <h4 class="text-center">
            <b>{{$discussion->title}}</b>
        </h4>   
        <hr>
        <p class="text-center">
            {!!Markdown::convertToHtml($discussion->content)!!}
        </p>

        @if ($best_ans)

        <div class="card" style="padding: 40px">
            <div class="card-header">
                <h3 style="text-align: center">Best Answer</h3>
                <img height="40px" width="40px" style="border-radius: 50%" src="{{Gravatar::src($best_ans->user->email )}}" alt="">
        
                    <span class=" ml-2">
                        {{$best_ans->user->name}}  &nbsp;
                        ({{$best_ans->user->points}})

                    </span>                   
        
            </div>
            <div class="card-body">
                {!!Markdown::convertToHtml($best_ans->content)!!}
            </div>
        </div>

        @endif
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
                    ({{$reply->user->points}})
                </span> 
                <span>
                    @if (!$best_ans)
                        @if (Auth::id()==$discussion->user->id)
                           <a href="{{route('discussion.best_answer',['id'=>$reply->id])}}" style="margin-left:8px" class="btn btn-outline-primary float-right">Mark as Best</a>
                        @endif                           
                    @endif
                    @if (Auth::id()==$reply->user->id)
                        @if (!$best_ans)
                           <a href="{{route('reply.edit',['id'=>$reply->id])}}" class="btn btn-outline-secondary btn-sm float-right">Edit Reply</a>
                        @endif
                    @endif
                </span>

        </div>
 
        <div class="card-body text-dark">

            <p class="text-center">
                {!!Markdown::convertToHtml($reply->content)!!}
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

