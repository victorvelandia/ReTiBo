<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <h1>🐄 ReTiBo</h1>
    <nav>
        <ul class="nav-list">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="record.php">Registros</a></li>
            <li><a href="tutorials.php">Tutorias</a></li>

            <?php if (isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nombre'])): ?>
                <li style="font-weight:bold;">👋 Hola, <?= htmlspecialchars($_SESSION['usuario_nombre']) ?></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            <?php else: ?>
                <li><a href="login.html">Iniciar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
