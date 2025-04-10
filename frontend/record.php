
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
  <title>Registro de Inseminación Bovinos</title>
  <link rel="stylesheet" href="css/record.css" />
</head>
<body>
<?php require_once 'menu.php';?>
  <div class="container">
    <h1>Registro de Inseminación Bovinos</h1>
    <form id="registroForm">
      <label>Nombre del Bovino:
        <input type="text" id="nombre" required />
      </label>

      <label>Fecha de Inseminación:
        <input type="date" id="fecha" required />
      </label>

      <label>Raza:
        <input type="text" id="raza" required />
      </label>

      <label>Observaciones:
        <textarea id="observaciones"></textarea>
      </label>

      <button type="submit">Registrar</button>
    </form>

    <h2>Registros Guardados</h2>
    <ul id="listaRegistros"></ul>
  </div>
  <?php require_once 'footer.php';?>
  <script src="js/security.js"></script>

  <script src="js/record.js"></script>
</body>
</html>


