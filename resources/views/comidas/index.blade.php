<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h1>Lista de Menu</h1>
    <a href="{{ route('comidas.create') }}" class="crear-btn">Crear Nueva Comida</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Costo</th>
                <th>Descripción</th>
                <th>Tipo de Comida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
            @foreach($tb_comidas as $comida)
            <tr>
                <td class="columna">{{ $comida->id }}</td>
                <td>{{ $comida->nombre_comida }}</td>
                <td class="columna  ">${{ $comida->costo_comida }}</td>
                <td>{{ $comida->descripcion_comida }}</td>
                <td class="columna5">{{ $comida->tipoComida->nombre_categoria }}</td>
                <td>
                    <a href="{{ route('comidas.edit', $comida->id) }}" class="btn">Editar</a>
                    <form action="{{ route('comidas.destroy', $comida->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class="btn">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>



</body>
</html>