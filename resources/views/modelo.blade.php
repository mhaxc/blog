 <!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <title>Document</title>
    </head>
    <body>
    <div class="bg-info text-white p-5 mb-3" >
        <a href="{{route('posts.index')}}" class=" btn btn-secondary">Home</a>
        <a href="{{route('posts.create')}}" class=" btn btn-secondary" >Create Post</a>
        <a href="{{route('login')}}" class="btn btn-secondary">Logar</a>
        
        @auth
        <form class="d-inline-block float-right" action="{{route('logout')}}" method="post">
        @csrf
            <button class="btn btn-secondary"> {{auth()->user()->name}} |-| Logout</button>
        </form>
        @else
          
        @endauth
    </div>
    <div class="container ">
        @yield('content')
    </div>
<div class="bg-dark text-white p-4 text-center">
   Feito  por Maxwell Ululu sempre atualizado  {{date("d/m/Y")}}

</div>

    </body>
    </html>




