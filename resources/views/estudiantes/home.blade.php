<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 30px;
        }
        .jumbotron {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 60px 30px;
            border-radius: 15px;
        }
        .jumbotron h1 {
            font-size: 3rem;
        }
        .jumbotron p {
            font-size: 1.5rem;
        }
        .container {
            text-align: center;
        }
        .card {
            margin-top: 20px;
        }
        .card-title {
            color: #6a11cb;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Aplicación</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/estudiantes') }}">Estudiantes</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <h1 class="display-4" style="font-weight: bold">Bienvenido a Mi Aplicación</h1>
            <p class="lead">La creatividad es Poder.</p>
            <hr class="my-4">
            <p>Explora las opciones en el menú para conocer más sobre nosotros .</p>
            <a class="btn btn-primary btn-lg" href="{{ url('/estudiantes') }}" role="button">Ir a Estudiantes</a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sobre mí</h5>
                        <p class="card-text">Conoce más sobre el Master.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contacto</h5>
                        <p class="card-text">Ponte en contacto con nosotros .</p>
                        <a href="#" class="btn btn-primary">Contactar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Estudiantes</h5>
                        <p class="card-text">Accede a la sección para gestionar estudiantes.</p>
                        <a href="{{ url('/estudiantes') }}" class="btn btn-primary">Ir a Estudiantes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
