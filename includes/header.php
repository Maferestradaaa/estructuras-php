<?php
// includes/header.php
// Encabezado HTML reutilizable. Inicia la sesión y define zona horaria.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
date_default_timezone_set('America/Mexico_City');
// Contador simple de visitas usando sesión.
if (!isset($_SESSION['visitas'])) { $_SESSION['visitas'] = 0; }
$_SESSION['visitas']++;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Estructuras de Control y Arreglos en PHP</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
  <h1>Estructuras de Control y Arreglos en PHP</h1>
  <p class="subtitle">Mini sitio demostrativo • PHP del lado del servidor</p>
  <p class="team">Integrantes del equipo: María Fernanda Estrada Gutiérrez, Darinel Roblero Trujillo, Moisés Cruz Damián</p>
</header>

