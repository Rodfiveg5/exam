<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="contenedor">
        <h1 class="titulo">Crear Comida</h1>  

        <form action="{{ route('comidas.store') }}" method="POST">
            @csrf

            <div class="grupo">
                <label for="nombre_comida">Nombre de la Comida</label>
                <input type="text" id="nombre_comida" name="nombre_comida" required>
            </div>

            <div class="grupo">
                <label for="costo_comida">Costo de la Comida</label>
                <input type="number" step="0.01" id="costo_comida" name="costo_comida" required>
            </div>

            <div class="grupo">
                <label for="descripcion_comida">Descripción</label>
                <textarea id="descripcion_comida" name="descripcion_comida"></textarea>
            </div>

            <div class="grupo">
                <label for="id_tb_tipo_comidas">Tipo de Comida</label>
                <select id="id_tb_tipo_comidas" name="id_tb_tipo_comidas" required>
                    @foreach($tb_tipo_comidas as $tipocomida)
                        <option value="{{ $tipocomida->id }}">
                            {{ $tipocomida->nombre_categoria }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn">Crear</button>

        </form>
    </div>

</body>
</html>