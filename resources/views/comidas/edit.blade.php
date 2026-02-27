<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Editar Comida</h1>
    <form action="{{ route('comidas.update', $comida->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="contenedor">
        <div>
            <label for="nombre_comida">Nombre de la Comida:</label>
            <input type="text" id="nombre_comida" name="nombre_comida" value="{{ $comida->nombre_comida }}" required>
        </div>
        <div>
            <label for="costo_comida">Costo de la Comida:</label>
            <input type="number" step="0.01" id="costo_comida" name="costo_comida" value="{{ $comida->costo_comida }}" required>
        </div>
        <div>
            <label for="descripcion_comida">Descripción de la Comida:</label>
            <textarea id="descripcion_comida" name="descripcion_comida">{{ $comida->descripcion_comida }}</textarea>
        </div>
        <div>
            <label for="id_tb_tipo_comidas">Tipo de Comida:</label>
            <select id="id_tb_tipo_comidas" name="id_tb_tipo_comidas" required>
                @foreach($tb_tipo_comidas as $tipocomida)
                    <option value="{{ $tipocomida->id }}" {{ $comida->id_tb_tipo_comidas == $tipocomida->id ? 'selected' : '' }}>{{ $tipocomida->nombre_categoria }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Actualizar</button>
    </div>
</body>
</html>