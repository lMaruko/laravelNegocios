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
                <H1 style="padding-top: 10px">Tabla Matrículas</H1>
                <div style="padding-bottom: 30px">
                    <form method="POST" action="{{ route('matriculas.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">ID Estudiante</label>
                            <input type="" name="idestudiante" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ID Sección</label>
                            <input type="" name="idseccion" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Nuevo</button>
                    </form>
                    <a type="button" class="btn btn-success" data-bs-toggle="modal" style="margin-top: 14px;"
                        data-bs-target="#exampleModal" href='{{ route('matricula.trigger') }}'>Detalles de
                        Matricula</a>
                </div>
            </div>
            <div class="col col-9">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr align="center">
                            <th scope="col">ID</th>
                            <th scope="col">ID Estudiante</th>
                            <th>ID Sección</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matriculas as $matricula)
                            <tr align="center">
                                <td>{{ $matricula->idmatricula }}</td>
                                <td>{{ $matricula->idestudiante }}</td>
                                <td>{{ $matricula->idseccion }}</td>
                                <td style="    display: flex; justify-content: center;">
                                    <a type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        style="margin-right: 5px" data-bs-target="#exampleModal"
                                        href='{{ route('matriculas.edit', [$matricula->idmatricula]) }}'>Modificar</a>
                                    <form action="{{ route('matriculas.destroy', [$matricula->idmatricula]) }}"
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
