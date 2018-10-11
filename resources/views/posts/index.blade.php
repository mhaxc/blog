@extends('modelo')
@section('content')
<h1>Todos os Posts </h1>
        @foreach($posts as $post )
            <div class="card mt-1"></div>
            <div class="card body">
                <h2>
                    <a href="{{route('posts.show',$post->id)}}">
                        {{$post->title}}
                    </a>
                </h2>
            </div>
        @endforeach
@endsection




