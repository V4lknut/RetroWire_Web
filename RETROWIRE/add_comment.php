<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrowire</title>
    <link href="estilos.css" rel="stylesheet">
</head>
<body class="bodyreenv">

<div id="navbar"> 
        <ul>
            <input class="input" name="text" placeholder="Buscar..." type="search">
            <input class="carrito" type="button" value="Mi Carrito">
            <a href="index.html"><img class="logo" src="Fotos/logo.png" alt="RetroWire"></a> 
            <li><a href="index.html" title="Inicio">Inicio</a></li>
            <li><a href="juegos.html" title="juegos">Juegos</a></li>
            <li><a href="Manual.html" title="Manual">Manual</a></li>
            <li><a href="index.php" title="Preguntas Frecuentes">Preguntas Frecuentes</a></li>
            <li><a href="nosostros.html" title="Sobre Nosotros">Sobre Nosotros</a></li>
            <li><a href="Contacto.html" title="Contactos">Contacto</a></li>
          </ul>
    </div>

    <div class="header-reen-foto">
        <h1 class="header-reen-text"> GRACIAS! </h1>
    </div>

    <?php
    include 'db.php';

    // Obtener los datos del formulario
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Insertar el comentario en la base de datos
    $query = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
    $result = $conn->query($query);

    // Verificar si la inserción fue exitosa
    if ($result) {
        echo '¡Comentario agregado exitosamente!';
    } else {
        echo 'Error al agregar el comentario: ' . $conn->error;
    }
    ?>
   
    <div class="divreenv">
        <br><br><br><a href="index.php">Volver a la página principal</a>
        <br><img src="Fotos/logo.png" alt="" height = 100px>
    </div>
    
</body>
</html>




