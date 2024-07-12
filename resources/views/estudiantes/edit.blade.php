<!-- resources/views/estudiantes/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Estudiante</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $estudiante->Nombre }}">
            </div>
            <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" value="{{ $estudiante->Apellido }}">
            </div>
            <div class="form-group">
                <label for="Celular">Celular</label>
                <input type="text" class="form-control" id="Celular" name="Celular" value="{{ $estudiante->Celular }}">
            </div>
            <div class="form-group">
                <label for="Curso">Curso</label>
                <select class="form-control" id="Curso" name="Curso">
                    <option value="curso1" {{ $estudiante->Curso == 'curso1' ? 'selected' : '' }}>Curso 1</option>
                    <option value="curso2" {{ $estudiante->Curso == 'curso2' ? 'selected' : '' }}>Curso 2</option>
                    <option value="curso3" {{ $estudiante->Curso == 'curso3' ? 'selected' : '' }}>Curso 3</option>
                    <option value="curso4" {{ $estudiante->Curso == 'curso4' ? 'selected' : '' }}>Curso 4</option>
                    <option value="curso5" {{ $estudiante->Curso == 'curso5' ? 'selected' : '' }}>Curso 5</option>
                    <option value="curso6" {{ $estudiante->Curso == 'curso6' ? 'selected' : '' }}>Curso 6</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
