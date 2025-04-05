<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RETIBO</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
  
<?php include 'menu.php';?>
  <main>
    <section id="inicio" class="section">
      <h2>Bienvenido a RETIBO</h2>
      <p>Registra y consulta notas para mejorar el manejo sostenible de tus vacas.</p>
    </section>

    <section id="subir" class="section">
      <h2>Subir Nota</h2>
      <form id="notaForm" autocomplete="off">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required placeholder="Ej: Vacuna aplicada" />

        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="5" required placeholder="Escribe aquí tu nota..."></textarea>

        <button type="submit">Guardar Nota</button>
      </form>
    </section>

    <section id="ver" class="section">
      <h2>Notas Guardadas</h2>
      <div id="listaNotas"></div>
    </section>
  </main>

 
  <?php include 'footer.php';?>

  <script src="js/java.js"></script>
</body>
</html>
