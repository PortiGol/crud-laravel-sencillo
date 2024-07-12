<!-- resources/views/estudiantes/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Estudiante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Agregar Estudiante</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ old('Nombre') }}">
            </div>
            <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" value="{{ old('Apellido') }}">
            </div>
            <div class="form-group">
                <label for="Celular">Celular</label>
                <input type="text" class="form-control" id="Celular" name="Celular" value="{{ old('Celular') }}">
            </div>
            <div class="form-group">
                <label for="Curso">Curso</label>
                <select class="form-control" id="Curso" name="Curso">
                    <option value="curso1">Curso 1</option>
                    <option value="curso2">Curso 2</option>
                    <option value="curso3">Curso 3</option>
                    <option value="curso4">Curso 4</option>
                    <option value="curso5">Curso 5</option>
                    <option value="curso6">Curso 6</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
