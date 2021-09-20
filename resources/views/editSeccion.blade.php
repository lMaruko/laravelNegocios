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

                <H1 style="padding-top: 10px">Editar Sección</H1>
                <div style="padding-bottom: 30px">
                    @foreach ($datos as $dato)
                        <form method="POST" action="{{ route('secciones.update', [$dato->idseccion]) }}">
                            @method("PUT")
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">ID Sección</label>
                                <input type="text" class="form-control" id="disabledInput"
                                    value="{{ $dato->idseccion }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">ID Clase</label>
                                <input type="" name="idclase" class="form-control" id=""
                                    value="{{ $dato->idclase }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Aula</label>
                                <input type="" name="aula" class="form-control" id="" value="{{ $dato->aula }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">ID Docente</label>
                                <input type="" name="idmaestro" class="form-control" id=""
                                    value="{{ $dato->idmaestro }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                            <a type="submit" class="btn btn-danger" href="{{ route('secciones.index') }}">Cancelar</a>
                        </form>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</body>

</html>
