<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mvc</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <center><h1>Practicando MVC</h1></center>
    <?php 
        require_once 'autoload.php';
        $controlador = new UsuarioController();
        $controlador->mostrarTodos();
    ?>
</body>
</html>