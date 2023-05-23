<?php
include 'db.php';

// Obtener los comentarios existentes de la base de datos
$query = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sección de Comentarios</title>
    <link href="estilos.css" rel="stylesheet">
</head>
<body>

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

    <div class="header-foto">
        <h1 class="header-text">PREGUNTAS FRECUENTES</h1>
    </div>


    <div class="preguntasdiv">
    <h2 class="titcoment">Comentarios:</h2>
        <div class="divcoments" >
          <?php
          // Mostrar los comentarios existentes
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<p><strong>' . $row['name'] . ':</strong> ' . $row['comment'] . '</p>';
                  echo '<p><em>' . $row['created_at'] . '</em></p>';
                  echo '<hr>';
              }
          } else {
              echo '<p>No hay comentarios aún.</p>';
          }
          ?>

        </div>
        
        <div class="enviarcoment">
        <h2>Añadir comentario:</h2>
          <form action="add_comment.php" method="POST">
              <label for="name">Nombre:</label><br>
              <input type="text" name="name" id="name" required><br><br>
              <label for="comment">Comentario:</label><br>
              <textarea name="comment" id="comment" rows="4" cols="50" required></textarea><br><br>
              <input type="submit" value="Enviar">
          </form>
        </div>

    </div>


    <div class="qna">  
      <h3>1. ¿Cómo puedo adquirir una máquina recreativa RetroWire?</h3>
        <p>Puedes adquirir una máquina recreativa RetroWire directamente a través de nuestra página web. Realizamos envíos a nivel nacional e internacional, para que puedas recibir tu máquina donde quiera que estés.</p>
        <br>
      <h3>2. ¿Qué juegos vienen preinstalados en la máquina recreativa RetroWire?</h3>
        <p>La máquina recreativa RetroWire viene con una amplia selección de juegos preinstalados, que incluyen clásicos de NES, Super Nintendo, GameBoy, GameBoy Advance, MSDos y Arcade. Algunos de los juegos incluidos son Super Mario Bros, Donkey Kong, Street Fighter y Mortal Kombat, entre otros.</p>
        <br>
      <h3>3. ¿Puedo agregar más juegos a la máquina recreativa RetroWire?</h3>
        <p>Sí, puedes agregar más juegos a la máquina recreativa RetroWire. La máquina viene con una tarjeta microSD de 64 GB, en la cual puedes agregar tus juegos favoritos. </p>
        <br>
      <h3>4. ¿Puedo personalizar la máquina recreativa RetroWire?</h3>
        <p>Sí, podemos personalizar la máquina recreativa RetroWire según tus especificaciones. Ponte en contacto con nosotros para discutir tus necesidades y te proporcionaremos un presupuesto personalizado.</p>
        <br>
      <h3>5. ¿Qué sistema operativo utiliza la máquina recreativa RetroWire?</h3>
        <p>La máquina recreativa RetroWire utiliza el sistema operativo RetroPie, que está diseñado específicamente para emular juegos retro en una amplia variedad de plataformas.</p>
        <br>
      <h3>6. ¿Cómo puedo obtener soporte técnico para la máquina recreativa RetroWire?</h3>
        <p>Si necesitas soporte técnico para tu máquina recreativa RetroWire, puedes ponerte en contacto con nuestro equipo de soporte técnico a través de nuestro correo electrónico. Estaremos encantados de ayudarte con cualquier problema o pregunta que puedas tener.</p>
        <br>

    </div>




    <div class="suscribete">
        
        <h1>SUSCRÍBETE</h1></td>
        <p>¿Quieres estar al dia de nuestras novedades? ¡No dudes en suscribirte!</p>
        <input class="Email" name="Email" placeholder="Email" type="email"> 
        <input class="boton" type="button" value="Enviar">
      </div>
      
  
  
  
  
      <div class="footindex">
        <div class="footenlazes">
          <img src="Fotos/logo.png" alt=""><br><br><br><br><br>
          <p>- Av. de l'Anselm de Riu, 10, Santa Coloma de Gramenet, Barcelona</p>
          <p>- Santa Coloma de Gramanet 08924</p>
          <p>- (+34) 398 243 769</p>
          <p>- retrowire@gmail.com</p>
        </div>
  
        <div class="footenlazes">
          <h1>Categorías</h1>
          <a href="index.html" title="Inicio">Inicio</a><br><br>
          <a href="juegos.html" title="juegos">Juegos</a><br><br>
          <a href="index.php" title="Preguntas Frecuentes">Preguntas Frecuentes</a><br><br>
          <a href="nosostros.html" title="Sobre Nosotros">Sobre Nosotros</a><br><br>
          <a href="Contacto.html" title="Contactos">Contacto</a><br><br>
        </div>
      </div>
  
      <div class="foterlogos">
        <img src="Fotos/footer.png">
      </div>
  
      <footer>
        <p> Copyright © 2023 Retrowire - Nacho Herrero & Adrin Morato. Todos los derechos reservados.</p>
      </footer>






      




</body>
</html>
