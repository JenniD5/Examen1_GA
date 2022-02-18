<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar funcion</title>
</head>
<body>
    
    <h1>Crear una nueva funcion</h1>
    <a href="{{route('funciones.index')}}">Regresar a la lista</a>
    <form method="post" action="{{route('funciones.store')}}">
         @csrf
         <label>pelicula</label>
         <input type="text" name="pelicula">
        <br/>

        <label>fecha</label>
        <input type="text" name="fecha">
        <br/>

        <label>hora</label>
        <input type="text" name="hora">
        <br/>

        <button type="submit">Guardar nueva función</button>
    </form>
</body>
</html>