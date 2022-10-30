<?php
declare(strict_types=1);

require __DIR__ . '/functions.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/header.php';

?>

    <h2> Patterns </h2>

    <div class="pattern-container">
        <div class= "twoshaft">
            <?= printTwoshaft($twoshaft); ?>
        </div>

        <div class= "twill">
            <?= printTwill($twill); ?>
        </div>

        <div class="satin">
            <?= printSatin($satin); ?>
        </div>

        <div class="basket">
            <?= printBasket($basket); ?>
        </div>
    </div>

<?php require __DIR__ . '/footer.php'; ?>



