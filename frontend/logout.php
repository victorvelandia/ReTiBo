<?php
session_start();
session_unset();
session_destroy();

// Evitar que el navegador guarde la página
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

header("Location: index.php");
exit;
