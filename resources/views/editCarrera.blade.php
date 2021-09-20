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

                <H1 style="padding-top: 10px">Editar Carrera</H1>
                <div style="padding-bottom: 30px">
                    @foreach ($datos as $dato)
                        <form method="POST" action="{{ route('carrera.update', [$dato->idcarrera]) }}">
                            @method("PUT")
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">ID Carrera</label>
                                <input type="text" class="form-control" id="disabledInput"
                                    value="{{ $dato->idcarrera }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Carrera</label>
                                <input type="" name="nombre" class="form-control" id="" value="{{ $dato->nombre }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Modificar</button>
                            <a type="submit" class="btn btn-danger" href="{{ route('carrera.index') }}">Cancelar</a>
                        </form>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</body>

</html>
