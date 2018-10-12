@extends('modelo')
@section('content')

<h1>Todos os Posts </h1>

@foreach($posts as $post )
           
<div class="card mt-2"></div>
            <div class="card body">
                <h2>
                    <a href="{{route('posts.show',$post->id)}}">
                        {{$post->title}}
                    </a>
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info"> editar</a>
                   
                    <form onsubmit="return confirm('deseja  realmente apagar essa  post?')" class ="d-inline-block" method ="post" action="{{route('posts.destroy',$post->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class ="btn btn-danger">Deletar</button>
                    </form>
                </h2>
            </div>
        @endforeach
    <div class="mt-4">
        {{$posts->links()}}
        </div>
@endsection




