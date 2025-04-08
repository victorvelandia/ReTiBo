<header>
  <h1>🐄 ReTiBo</h1>
  <nav class="main-nav">
    <div class="nav-container">
      <ul class="nav-list">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="tutorials.php">Tutorias</a></li>
        <?php if (isset($_SESSION['usuario_id'])): ?>
          <li><a href="record.php">Registros</a></li>
        <?php endif; ?>
      </ul>

      <?php if (isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nombre'])): ?>
        <div class="user-controls">
          <span>👋 Hola, <?= htmlspecialchars($_SESSION['usuario_nombre']) ?></span>
          <a href="logout.php">Cerrar sesión</a>
        </div>
      <?php else: ?>
        <a href="login.html" class="login-link">Iniciar Sesión</a>
      <?php endif; ?>
    </div>
  </nav>
</header>

<style>
  header {
    background-color: #4caf50;
    color: white;
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  .main-nav {
    flex: 1;
  }

  .nav-container {
    display: flex;
    justify-content: flex-end; /* Todo se va a la derecha */
    align-items: center;
    gap: 2rem;
  }

  .nav-list {
    list-style: none;
    display: flex;
    flex-direction: row;
    gap: 2rem;
    margin: 0;
    padding: 0;
  }

  .nav-list a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    transition: opacity 0.3s;
  }

  .nav-list a:hover {
    opacity: 0.8;
  }

  .user-controls {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    color: white;
  }

  .user-controls span {
    font-weight: bold;
  }

  .user-controls a {
    color: white;
    text-decoration: none;
    font-size: 0.9rem;
    margin-top: 0.3rem;
  }

  .login-link {
    color: white;
    text-decoration: none;
    font-weight: bold;
  }
</style>
