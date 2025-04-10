<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RETIBO - Inicio</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

  <?php require_once 'menu.php'; ?>

  <main>
    <!-- Sección de bienvenida -->
    <section class="inicio-hero">
      <div class="inicio-contenido">
        <h1>🐄 Bienvenido a ReTiBo</h1>
        <p>Tu plataforma para gestionar la inseminación bovina y la restitución de tierras.</p>

        <?php if (isset($_SESSION['usuario_id'])): ?>
          <a href="record.php" class="btn">📋 Ver mis registros</a>
        <?php else: ?>
          <a href="login.html" class="btn">🔐 Inicia sesión para empezar</a>
        <?php endif; ?>
      </div>
    </section>

    <!-- Sección de funciones destacadas -->
    <section class="inicio-funciones">
      <h2>🚀 ¿Qué puedes hacer aquí?</h2>
      <div class="funciones-grid">
        <div class="funcion">
          <h3>📝 Registra tus bovinos</h3>
          <p>Administra inseminaciones, fechas, resultados y seguimiento.</p>
        </div>
        <div class="funcion">
          <h3>🎓 Aprende con tutoriales</h3>
          <p>Capacítate con contenido especializado para mejorar tus prácticas.</p>
        </div>
        <div class="funcion">
          <h3>💬 Recibe asesoría</h3>
          <p>Conéctate con expertos y técnicos desde la plataforma.</p>
        </div>
      </div>
    </section>
  </main>

  <?php require_once 'footer.php'; ?>
  <script src="js/security.js"></script>
  <script src="js/java.js"></script>
</body>
</html>
