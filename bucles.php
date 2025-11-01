    <?php
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/menu.php';

$numeros = [2, 4, 6, 8, 10];
$estudiantes = [
  "A001" => "Moises",
  "A002" => "Carlos",
  "A003" => "Miriam",
];

// Ejemplo 1: for
$cuadrados = [];
for ($i = 0; $i < count($numeros); $i++) {
  $cuadrados[$i] = $numeros[$i] * $numeros[$i];
}

// Ejemplo 2: while
$suma = 0;
$i = 0;
while ($i < count($numeros)) {
  $suma += $numeros[$i];
  $i++;
}

// Ejemplo 3: foreach
$listaEstudiantes = [];
foreach ($estudiantes as $matricula => $nombre) {
  $listaEstudiantes[] = "$matricula — $nombre";
}
?>
<main class="container">
  <section class="card">
    <h2>Bucles en PHP</h2>

    <h3>Ejemplo 1 – for</h3>
    <p>Cuadrados de los números: <?php echo implode(", ", $cuadrados); ?></p>
    <pre><code>
for ($i = 0; $i < count($numeros); $i++) {
  echo $numeros[$i] * $numeros[$i];
}
    </code></pre>

    <h3>Ejemplo 2 – while</h3>
    <p>Suma total con <code>while</code>: <?php echo $suma; ?></p>
    <pre><code>
$suma = 0;
$i = 0;
while ($i < count($numeros)) {
  $suma += $numeros[$i];
  $i++;
}
    </code></pre>

    <h3>Ejemplo 3 – foreach</h3>
    <ul>
      <?php foreach ($listaEstudiantes as $item): ?>
        <li><?php echo htmlspecialchars($item); ?></li>
      <?php endforeach; ?>
    </ul>
    <pre><code>
foreach ($estudiantes as $matricula => $nombre) {
  echo "$matricula — $nombre";
}
    </code></pre>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
