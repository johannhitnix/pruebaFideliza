<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Registro de Usuarios</h1>
        <form action="save.php" method="post">
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese sus nombres aqui" required >
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos aqui" required >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required >
            </div>
            <div class="form-group">
                <label for="departamento">Departamento</label>
                <select class="form-control" id="departamento" name="departamento">
                    <option selected>Elija uno</option>
                    <option>Cundinamarca</option>
                    <option>Boyaca</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <select class="form-control" id="ciudad" name="ciudad">
                    <option selected>Elija uno</option>
                </select>
            </div>            
            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <textarea class="form-control" id="observaciones" name="observaciones" rows="3" placeholder="Ponga aquí sus observaciones"></textarea>
            </div>
            <div id="target"></div>
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
        <div id="result"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>