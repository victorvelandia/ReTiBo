
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tutorías ReTiBo</title>
   <link rel="stylesheet" href="css/tutorials.css" />
</head>
<body>
<?php include_once 'menu.php';?>
  <main>
    <section class="temas">
      <h2>Temas Disponibles</h2>
      <ul>
        <li>➤ Inseminación in vitro</li>
        <li>➤ Selección genética en bovinos</li>
        <li>➤ Manejo reproductivo</li>
        <li>➤ Sanidad en ciclos de fertilización</li>
        <li>➤ Bioseguridad y trazabilidad</li>
      </ul>
    </section>

    <section class="tutores">
      <h2>Tutores Conectados</h2>
      <div id="tutor-list">
        <!-- JS llenará esta parte -->
      </div>
    </section>

    <section class="acciones">
      <h2>¿Necesitas ayuda?</h2>
      <button onclick="iniciarChat()">📩 Chatear con un experto</button>
      <button onclick="iniciarVideo()">🎥 Iniciar videollamada</button>
    </section>
  </main>

  <?php include_once 'footer.php';?>
  <script src="js/security.js"></script>

  <script src="js/tutorials.js"></script>
</body>
</html>


