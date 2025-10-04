<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Editar Post</title>     
    </head> 
    <body>
        <nav class="navbar navbar-expand-lg navbar-ligth bg-warning ">
            <div class="container-fluid"> 
                <a class="navbar-brand h1" href="{{ route('posts.index')}}">Aplicacion Post </a>
                <div class="justify-end">
                    <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('posts.create') }}">Añadir Post</a> 
                    </div>
                </div>
            </div>
        </nav>        
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center aling-item center">
                <div class="col-10 col-md8 col-lg-6">
                    <h3> Actualizar Post</h3>
                    <form action="{{route('posts.update',$post->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input value="{{$post->title}}" type="text" class="form-control" name="title" id="title" required>
                        </div>  
                        <div class="form-group">
                            <label for="body">Cuerpo</label>
                            <textarea  class="form-control" name="body" id="body" rows="3" required> {{ $post->body }} </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualiza post</button>

                    </form>

                </div>
            </div>  
        </div>
    </body>

</html>