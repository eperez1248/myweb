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
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid"> 
            <a class="navbar-brand h1" href="{{ route('posts.index') }}">Aplicación Post</a>
            <div class="d-flex justify-content-end">
                <a class="btn btn-sm btn-success" href="{{ route('posts.create') }}">Agregar Post</a>   
            </div>
        </div>
    </nav>        

    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', $post->id) }}">Editar</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</body>
</html>
