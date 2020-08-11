@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Update a Reply</div>

    <div class="card-body">
        
        <form action="{{route('reply.update',['id'=>$reply->id])}}" method="post">
            @csrf

            <div class="form-group">
                <label for="content">Content</label>
                <input id="x" type="hidden" value="{{$reply->content}}" name="content">
                <trix-editor input="x" ></trix-editor>
            </div>

            <button type="submit" class="btn btn-success float-right">Save a Reply</button>
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
