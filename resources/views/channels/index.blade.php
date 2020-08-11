@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Channels
        <a class="btn btn-success" href="{{route('channels.create')}}" >Create Channel</a>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>

                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>

            </thead>

            <tbody>
                @foreach ($channels as $channel)
                    <tr>
                        <td>{{$channel->name}}</td>
                        <td><a href="{{route('channels.edit',$channel->id)}}" class="btn btn-sm btn-info">Edit</a></td>
                        <td>
                            <form action="{{route('channels.destroy',$channel->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
