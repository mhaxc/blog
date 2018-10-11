@extends('modelo')
@section('content')

        <div class="card">
       <div class="card-header"></div>
        <h2>{{$post->title}}</h2>
          </div>
            <div class="card-body">
            <p>
                {{$post->content}}
            </p>

        </div>

@stop