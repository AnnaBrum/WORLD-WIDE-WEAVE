<?php
declare(strict_types=1);
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/arrays.php';
?>

<h2> Links </h2>

<!-- Funktion som loopar artiklar som länkas. -->
<?= listLinks($articles)?>


<?php require __DIR__ . '/footer.php'; ?>
