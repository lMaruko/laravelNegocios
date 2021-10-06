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
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="col col-2">
            </div>
            <div class="col col-8">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr align="center">
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Correo</th>
                            <th>Carrera</th>
                            <th>Fecha Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudiantesTrigger as $estudiante)
                            <tr align="center">
                                <td>{{ $estudiante->idestudiante }}</td>
                                <td>{{ $estudiante->nombres }}</td>
                                <td>{{ $estudiante->apellidos }}</td>
                                <td>{{ $estudiante->dni }}</td>
                                <td>{{ $estudiante->correo }}</td>
                                <td>{{ $estudiante->carrera }}</td>
                                <td>{{ $estudiante->fecha }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a type="button" class="btn btn-success" data-bs-toggle="modal" style="margin-right: 74%;"
                    data-bs-target="#exampleModal" href='{{ route('estudiantes.index') }}'>Lista de Estudiantes</a>
            </div>
            <div class="col col-2">
            </div>
        </div>
    </div>
</body>

</html>
