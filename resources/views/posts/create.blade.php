@extends('modelo')
@section('content')
   <h1 class>Add  New Post</h1>

@if($errors->all())
        <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
        </div>
@endif
   <form action="{{route('posts.store')}}" method="post">
       @csrf
         <div class="form group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control">
          </div>

            <div class="form group">
            <label for="content">content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>

        <div class="form-control">
            <button type="submit" class="btn btn-outline-info">ADD a Post</button>

        </div>
    </form>
    @endsection
