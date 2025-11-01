   <?php
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/menu.php';

$colores = ["rojo", "verde", "azul"];

$precioPorProducto = [
  "Mouse" => 199.90,
  "Teclado" => 349.50,
  "Monitor" => 2499.00,
  "USB 32GB" => 129.00,
];

$productos = [
  ["nombre" => 'Laptop 14"', "precio" => 12500, "stock" => 5],
  ["nombre" => "Audífonos", "precio" => 550, "stock" => 0],
  ["nombre" => "Router WiFi", "precio" => 950, "stock" => 12],
];

$umbralCaro = 1000;
?>
<main class="container">
  <section class="card">
    <h2>Arreglos en PHP</h2>

    <h3>Ejemplo 1 – Arreglo indexado</h3>
    <p>Total de colores: <?php echo count($colores); ?></p>
    <ul>
      <?php foreach ($colores as $c): ?>
        <li><?php echo htmlspecialchars($c); ?></li>
      <?php endforeach; ?>
    </ul>
    <pre><code>
$colores = ["rojo", "verde", "azul"];
foreach ($colores as $c) {
  echo $c;
}
    </code></pre>

    <h3>Ejemplo 2 – Arreglo asociativo</h3>
    <table class="tabla">
      <thead><tr><th>Producto</th><th>Precio</th><th>Etiqueta</th></tr></thead>
      <tbody>
        <?php foreach ($precioPorProducto as $prod => $precio): 
          $etiqueta = ($precio >= $umbralCaro) ? "Caro" : "Económico";
        ?>
          <tr>
            <td><?php echo htmlspecialchars($prod); ?></td>
            <td>$<?php echo number_format($precio, 2); ?></td>
            <td><?php echo $etiqueta; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <pre><code>
$precioPorProducto = ["Mouse"=>199.90,"Teclado"=>349.50];
foreach ($precioPorProducto as $nombre=>$precio) {
  echo "$nombre: $precio";
}
    </code></pre>

    <h3>Ejemplo 3 – Arreglo multidimensional</h3>
    <table class="tabla">
      <thead><tr><th>Producto</th><th>Precio</th><th>Stock</th><th>Estado</th></tr></thead>
      <tbody>
        <?php foreach ($productos as $p): 
          $estado = ($p['stock'] > 0) ? "Disponible" : "Agotado";
        ?>
          <tr>
            <td><?php echo htmlspecialchars($p['nombre']); ?></td>
            <td>$<?php echo number_format($p['precio'], 2); ?></td>
            <td><?php echo $p['stock']; ?></td>
            <td><?php echo $estado; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <pre><code>
$productos = [
  ["nombre"=>"Laptop","precio"=>12500,"stock"=>5],
  ["nombre"=>"Router","precio"=>950,"stock"=>12]
];
foreach ($productos as $p) {
  echo $p['nombre'];
}
    </code></pre>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
