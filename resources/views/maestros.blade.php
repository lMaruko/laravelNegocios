<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div style="background: #e6e2e2;">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('carrera.index') }}">Carreras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clases.index') }}">Clases</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('estudiantes.index') }}">Estudiantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('maestros.index') }}">Docentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('matriculas.index') }}">Matrículas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('secciones.index') }}">Secciones</a>
            </li>
        </ul>
    </div>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="col col-3">
                <H1 style="padding-top: 10px">Tabla Maestros</H1>
                <div style="padding-bottom: 30px">
                    <form method="POST" action="{{ route('maestros.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nombres</label>
                            <input type="" name="nombres" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellidos</label>
                            <input type="" name="apellidos" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">DNI</label>
                            <input type="" name="dni" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Teléfono</label>
                            <input type="" name="telefono" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Nuevo</button>
                    </form>
                    <a type="button" class="btn btn-success" data-bs-toggle="modal" style="margin-top: 14px;"
                        data-bs-target="#exampleModal" href='{{ route('maestro.trigger') }}'>Detalles de Creación</a>
                </div>
            </div>
            <div class="col col-9">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr align="center">
                            <th scope="col">Id</th>
                            <th scope="col">Nombres</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($maestros as $maestro)
                            <tr align="center">
                                <td>{{ $maestro->idmaestro }}</td>
                                <td>{{ $maestro->nombres }}</td>
                                <td>{{ $maestro->apellidos }}</td>
                                <td>{{ $maestro->dni }}</td>
                                <td>{{ $maestro->telefono }}</td>
                                <td style="    display: flex; justify-content: center;">
                                    <a type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        style="margin-right: 5px" data-bs-target="#exampleModal"
                                        href='{{ route('maestros.edit', [$maestro->idmaestro]) }}'>Modificar</a>
                                    <form action="{{ route('maestros.destroy', [$maestro->idmaestro]) }}"
                                        method="post">
                                        @method("delete")
                                        @csrf
                                        <button type="submit" class="btn btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
