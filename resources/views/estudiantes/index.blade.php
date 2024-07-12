<!-- resources/views/estudiantes/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4 text-center">Lista de Estudiantes</h1>
        <div class="text-center mb-4">
            <a href="{{ url('/estudiantes/create') }}" class="btn btn-primary btn-sm">Ir a agregar Estudiante</a>
        </div>

        @if(isset($message))
            <div class="alert alert-info" role="alert">
                {{ $message }}
            </div>
        @else
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Celular</th>
                        <th>Curso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $estudiante->id }}</td>
                            <td>{{ $estudiante->Nombre }}</td>
                            <td>{{ $estudiante->Apellido }}</td>
                            <td>{{ $estudiante->Celular }}</td>
                            <td>{{ $estudiante->Curso }}</td>
                            <td>
                                <a href="{{ url('/estudiantes/' . $estudiante->id . '/edit') }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ url('/estudiantes/' . $estudiante->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>

</html>
