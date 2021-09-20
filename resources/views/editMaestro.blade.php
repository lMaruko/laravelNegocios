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
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">

                <H1 style="padding-top: 10px">Editar Docente</H1>
                <div style="padding-bottom: 30px">
                    @foreach ($datos as $dato)
                        <form method="POST" action="{{ route('maestros.update', [$dato->idmaestro]) }}">
                            @method("PUT")
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">ID Docente</label>
                                <input type="text" class="form-control" id="disabledInput"
                                    value="{{ $dato->idmaestro }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nombres</label>
                                <input type="" name="nombres" class="form-control" id=""
                                    value="{{ $dato->nombres }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Apellidos</label>
                                <input type="" name="apellidos" class="form-control" id=""
                                    value="{{ $dato->apellidos }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">DNI</label>
                                <input type="" name="dni" class="form-control" id="" value="{{ $dato->dni }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Teléfono</label>
                                <input type="" name="telefono" class="form-control" id=""
                                    value="{{ $dato->telefono }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                            <a type="submit" class="btn btn-danger" href="{{ route('maestros.index') }}">Cancelar</a>
                        </form>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</body>

</html>
