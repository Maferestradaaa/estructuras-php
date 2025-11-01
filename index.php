<?php
  // index.php — Página de inicio
  require __DIR__ . '/includes/header.php';
  require __DIR__ . '/includes/menu.php';

  // Fecha y hora local en español (usa IntlDateFormatter si está disponible)
if (class_exists('IntlDateFormatter')) {
  $fmt = new IntlDateFormatter('es_MX', IntlDateFormatter::FULL, IntlDateFormatter::MEDIUM, date_default_timezone_get());
  $hoy = $fmt->format(new DateTime());
} else {
  // Fallback manual si no existe intl
  $dias = ['domingo','lunes','martes','miércoles','jueves','viernes','sábado'];
  $meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
  $dt = new DateTime('now', new DateTimeZone(date_default_timezone_get()));
  $hoy = $dias[(int)$dt->format('w')] . ' ' . $dt->format('d') . ' de ' . $meses[(int)$dt->format('n')-1] . ' de ' . $dt->format('Y, H:i:s');
}

  $descripcion = "Este mini sitio muestra ejemplos prácticos de estructuras de control (condicionales y bucles) y uso de arreglos en PHP.";

  // Ejemplo simple de variables y funciones del sistema
  $items = ["if/else", "elseif", "switch", "for", "while", "foreach", "arreglos indexados", "arreglos asociativos", "arreglos multidimensionales"];
  $total = count($items);
?>
<main class="container">
  <section class="card">
    <h2>Bienvenido 👋</h2>
    <p><strong>Fecha y hora actuales:</strong> <?php echo $hoy; ?></p>
    <p><?php echo $descripcion; ?></p>
    <p>En este sitio verás <strong><?php echo $total; ?></strong> conceptos clave, por ejemplo:</p>
    <ul>
      <?php foreach ($items as $it): ?>
        <li><?php echo htmlspecialchars($it); ?></li>
      <?php endforeach; ?>
    </ul>
  </section>
  <section class="card">
    <h3>¿Cómo está organizado?</h3>
    <p>Usamos <code>include()</code> para el encabezado, menú y pie de página. Revisa el menú para navegar.</p>
    <p>También utilizamos sesiones para contar tus visitas durante esta sesión del navegador.</p>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
