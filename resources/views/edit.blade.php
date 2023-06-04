<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <form action="{{url('update'.$fruta->id)}}" class="form p-4" method="POST">
        @csrf
        <h1 class="form-text">Formulario de Editar</h1>
        <label class="form-text" for="nombre_producto">Nombre de la Fruta</label> <br>
        <input class="form-control" value="{{$fruta->nombre_fruta}}" type="text" name="nombre_fruta" id="nombre_producto" class="form-control"> <br>
        <label class="form-text" for="cantidad">Cantidad</label> <br>
        <input type="number"  value="{{$fruta->cantidad}}" name="cantidad" id="cantidad" class="form-control"> <br>
        <label for="proveedor" class="form-text">Proveedor</label> <br>
        <input type="text" value="{{$fruta->proveedor}}" name="proveedor" id="proveedor" class="form-control">
        <br> <br>
        <button class="btn btn-primary mt-0" type="submit">Registrar</button>
    </form>
</body>
</html>