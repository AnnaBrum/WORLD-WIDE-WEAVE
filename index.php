<?php

declare(strict_types=1);
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/arrays.php';

?>

<main>
    <h1>WORLD WIDE WEAVE</h1>

    <nav>
        <ul>
            <li><a class="another-page" href="./weavingandcoding.php"> Weaving and Coding </a></li>
            <li><a class="another-page" href="./patterns.php"> Patterns </a></li>
            <li><a class="another-page" href="./links.php"> Links </a></li>
        </ul>
    </nav>


<img src="<?= randomImage($images)?>"></img>

</main>
<?php require __DIR__ . '/footer.php'; ?>
