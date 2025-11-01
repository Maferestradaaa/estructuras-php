<?php // includes/footer.php ?>
<footer class="site-footer">
  <p>Visitas (sesión actual): <strong><?php echo $_SESSION['visitas'] ?? 1; ?></strong></p>
  <p>&copy; <?php echo date('Y'); ?> • Proyecto educativo • PHP</p>
</footer>
</body>
</html>
