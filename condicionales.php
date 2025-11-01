    <?php
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/menu.php';

// Variables de ejemplo
$promedio = 82;
$clima = "lluvioso";
$materias = ["BD", "Redes", "Web", "SO"];
$tieneWeb = in_array("Web", $materias);

// Ejemplo 1: if / elseif / else
if ($promedio >= 90) {
  $mensajePromedio = "Excelente desempeño";
} elseif ($promedio >= 70) {
  $mensajePromedio = "Aprobado, buen trabajo";
} else {
  $mensajePromedio = "Necesitas reforzar el estudio";
}

// Ejemplo 2: switch
switch ($clima) {
  case "soleado":
    $recomendacion = "Usa bloqueador y una gorra.";
    break;
  case "lluvioso":
    $recomendacion = "Lleva paraguas o impermeable.";
    break;
  case "nublado":
    $recomendacion = "Puede refrescar, lleva suéter ligero.";
    break;
  default:
    $recomendacion = "Revisa el pronóstico para estar preparado.";
}
?>
<main class="container">
  <section class="card">
    <h2>Condicionales en PHP</h2>

    <h3>Ejemplo 1 – if / elseif / else</h3>
    <p><strong>Promedio:</strong> <?php echo $promedio; ?> → <?php echo $mensajePromedio; ?></p>
    <pre><code>
if ($promedio >= 90) {
  echo "Excelente desempeño";
} elseif ($promedio >= 70) {
  echo "Aprobado, buen trabajo";
} else {
  echo "Necesitas reforzar el estudio";
}
    </code></pre>

    <h3>Ejemplo 2 – switch</h3>
    <p><strong>Clima:</strong> <?php echo htmlspecialchars($clima); ?> → <?php echo $recomendacion; ?></p>
    <pre><code>
switch ($clima) {
  case "soleado":
    echo "Usa bloqueador y una gorra.";
    break;
  case "lluvioso":
    echo "Lleva paraguas o impermeable.";
    break;
  default:
    echo "Revisa el pronóstico.";
}
    </code></pre>

    <h3>Ejemplo 3 – Condicional con arreglo</h3>
    <p>¿La lista de materias incluye <code>Web</code>? 
    <strong><?php echo $tieneWeb ? "Sí" : "No"; ?></strong></p>
    <pre><code>
$materias = ["BD", "Redes", "Web", "SO"];
if (in_array("Web", $materias)) {
  echo "Sí incluye Web";
}
    </code></pre>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
