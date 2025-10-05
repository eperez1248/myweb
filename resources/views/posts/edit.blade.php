<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <title>Editar Post</title>     
</head> 
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid"> 
            <a class="navbar-brand h1" href="{{ route('posts.index') }}">Aplicación Post</a>
            <div class="d-flex justify-content-end">
                <a class="btn btn-sm btn-success" href="{{ route('posts.create') }}">Añadir Post</a> 
            </div>
        </div>
    </nav>        

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Actualizar Post</h3>
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input value="{{ $post->title }}" type="text" class="form-control" name="title" id="title" required>
                    </div>  
                    <div class="mb-3">
                        <label for="body" class="form-label">Cuerpo</label>
                        <textarea class="form-control" name="body" id="body" rows="3" required>{{ $post->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Post</button>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>
