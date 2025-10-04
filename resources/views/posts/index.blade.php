<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
              crossorigin="anonymous">
        <title>Posts</title>     
    </head>


    <nav class="navbar navbar-expand-lg navbar-ligth bg-warning ">
        <div class="container-fluid"> 
            <a class="navbar-brand h1" href={{ route('posts.index')}}>Aplicacion Post</a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success"  href={{ route ('posts.create')}}>Agregar Post</a>   
                </div>
            </div>
        </div>
    </nav>        
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <div class="card-body">
                            <p class="car-text">{{$post->body}}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a class="btn btn-primary btn-sm"   
                                       href="{{ route ('posts.edit',$post->id)}}">Editar</a>
                                </div>
                                <div class="btn-sm">
                                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type = "submit" class="btn btn-danger btn-sm">Borrar</button>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
</html>