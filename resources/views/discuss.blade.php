@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create New Discussions</div>

    <div class="card-body">
        
        <form action="{{route('discussion.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="channel">Channel</label>
                <select name="channel_id" id="channel_id" class="form-control">
                    @foreach ($c as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="">Ask a quection</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success float-right">Create Discussion</button>
        </form>


    </div>
</div>
</div>
@endsection
