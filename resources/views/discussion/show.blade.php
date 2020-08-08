@extends('layouts.app')

@section('content')
<div class="card mb-4">
     
    <div class="card-header">
        <img height="40px" width="40px" style="border-radius: 50%" src="{{Gravatar::src($discussion->user->email )}}" alt="">

            <span class=" ml-2">
                {{$discussion->user->name}}  &nbsp;
                {{$discussion->created_at->diffForHumans()}}
            </span> 

        <a href="{{route('discussion',['slug'=>$discussion->slug])}}" class="btn btn-default float-right">View</a>
    </div>

    <div class="card-body">
        <h4 class="text-center">
            <b>{{$discussion->title}}</b>
        </h4>
        <hr>
        <p class="text-center">
            {!!$discussion->content,80!!}
        </p>
    </div>

    <div class="card-footer">
        {{$discussion->replies->count()}} Replies
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

        <div class="card-body">

            <p class="text-center">
                {{$reply->content,80}}
            </p>
        </div>
        <div class="card-footer">
            Like
        </div>
    </div>
@endforeach

<div class="card">
    <div class="card-body">
       <form action="{{route('dicussion.reply',$discussion->id)}}" method="POST">
           @csrf

           <div class="form-group">
               <label for="content">Leave a reply...</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
           </div>

           <button class="btn btn-success float-right" type="submit">Reply</button>
       </form>
    </div>
</div>
@endsection
