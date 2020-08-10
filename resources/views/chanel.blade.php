@extends('layouts.app')

@section('content')
{{-- {{$discussions}} --}}
@foreach ($discussions as $discussion) 
<div class="card text-dark mb-4">
    
   
        <div class="card-header">
            <img height="40px" width="40px" style="border-radius: 50%" src="{{Gravatar::src($discussion->email )}}" alt="">

                <span class=" ml-2">
                    {{$discussion->user->name}}  &nbsp;
                    {{$discussion->created_at->diffForHumans()}}
                </span> 

            <a href="{{route('discussion',['slug'=>$discussion->slug])}}" class="btn btn-outline-dark float-right">View</a>
        </div>

        <div class="card-body">
            <h4 class="text-center">
                <b>{{$discussion->title}}</b>
            </h4>
            <p class="text-center">
                {!!\Illuminate\Support\Str::limit($discussion->content,80)!!}
            </p>
        </div>
        <div class="card-footer">
            <span>
                {{$discussion->replies->count()}} Replies
            </span>
            <a href="{{route('channel',['slug'=>$discussion->channel->slug])}}" class="btn btn-outline-secondary float-right btn-sm">{{$discussion->channel->name}}</a>
        </div>
    
</div>
@endforeach

<div class="text-center mt-3">
    {{$discussions->links()}}

</div>
@endsection

