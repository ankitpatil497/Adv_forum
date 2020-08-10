@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create New Discussions</div>

    <div class="card-body">
        
        <form action="{{route('discussion.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="channel">Peek a Channel</label>
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
                <label for="content">Content</label>
                <input id="x" type="hidden" name="content">
                <trix-editor input="x"></trix-editor>
            </div>

            <button type="submit" class="btn btn-success float-right">Create Discussion</button>
        </form>


    </div>
</div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css" type="text/css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>
@endsection
