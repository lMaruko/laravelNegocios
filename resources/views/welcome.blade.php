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
        <H1 style="padding-top: 10px">Tabla Categorias</H1>
        <div style="padding-bottom: 30px">
            <form>
                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <input type="" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Categoría</label>
                    <input type="" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Nuevo</button>
            </form>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">IdCategoria</th>
                    <th scope="col">Nombre Categoria</th>
                    <th scope="col">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->IdCategoria }}</td>
                        <td>{{ $categoria->NombreCategoria }}</td>
                        <td>{{ $categoria->Descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>

</body>

</html>
