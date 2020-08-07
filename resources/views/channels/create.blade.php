@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
       {{isset($channels)?' Edit Channel' : 'Create Channels' }}   
    </div>

    <div class="card-body">
       <form action="{{isset($channels) ? route('channels.update',$channels->id):route('channels.store')}}" method="POST">
           @csrf
           @if (isset($channels))
                @method('PUT')
            @endif 
           <div class="form-group">
               <label for="name">Name</label>
               <input type="text" class="form-control" name="name" id="name" value="{{isset($channels) ? $channels->name:''}}">
           </div>
           <button class="btn btn-success" type="submit">{{isset($channels)?'Edit Channel':'Save Channel'}}</button>
       </form>
    </div>
</div>
@endsection
