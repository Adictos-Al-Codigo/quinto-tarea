<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    
    <form action="save" class="form p-4" method="POST">
        @csrf
        <h1 class="form-text">Formulario de Registro</h1>
        <label class="form-text" for="nombre_producto">Nombre de la Fruta</label> <br>
        <input class="form-control" type="text" name="nombre_fruta" id="nombre_producto" class="form-control"> <br>
        <label class="form-text" for="cantidad">Cantidad</label> <br>
        <input type="number" name="cantidad" id="cantidad" class="form-control"> <br>
        <label for="proveedor" class="form-text">Proveedor</label> <br>
        <input type="text" name="proveedor" id="proveedor" class="form-control">
        <br> <br>
        <button class="btn btn-primary mt-0" type="submit">Registrar</button>
    </form>

    <table class="table container table-bordered text-center ">
        <thead>
          <tr class="table-success">
            <th scope="col">Código</th>
            <th scope="col">Fruta</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($list_of_fruits as $fruta)
          <tr>
            <th scope="row">{{$fruta->id}}</th>
            <td>{{$fruta->nombre_fruta}}</td>
            <td>{{$fruta->cantidad}}</td>
            <td>{{$fruta->proveedor}}</td>
            <td>
                <a style="text-decoration-color: aqua" href="{{url('edit'. $fruta->id)}}"><i class="bi bi-pencil-square"></i></a>
                <a href="{{url('delete'. $fruta->id)}}"><i class="bi bi-trash-fill"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>