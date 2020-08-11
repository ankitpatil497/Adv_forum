@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Update a Discussions</div>

    <div class="card-body">
        
        <form action="{{route('discussion.update',['id'=>$discussion->id])}}" method="post">
            @csrf

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$discussion->content}}</textarea>

            </div>

            <button type="submit" class="btn btn-success float-right">Save a Discussion</button>
        </form>


    </div>
</div>
</div>
@endsection
