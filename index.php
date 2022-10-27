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
            <li><a class="another-page" href=""> Weaving and Coding </a></li>
            <li><a class="another-page" href="./patterns.php?"> Patterns </a></li>
            <li><a class="another-page" href=""> Pattern-maker </a></li>
            <li><a class="another-page" href=""> Info-links </a></li>
        </ul>
    </nav>

    <article class= "intro">
        <p>
        Invented by Joseph Jacquard and demonstrated in 1801, the Jacquard Loom is an attachment for powered fabric looms. It uses a chain of punch cards to instruct the loom on how to make intricate textiles. For example, a loom could have hundreds of cards with holes corresponding to hooks that can be raised or lowered to make a textile brocade. Below is an illustration of the Jacquard Loom attachment on top of a textile loom.
        </p>

        <p>
        The Jacquard Loom is important to computer history because it is the first machine to use interchangeable punch cards to instruct a machine to perform automated tasks. Having a machine that could perform various tasks is similar to today's computer programs that can be programmed to perform different tasks. The Jacquard Loom was also an inspiration to Charles Babbage planning to use perforated cards in his analytical engine. Herman Hollerith also used the idea of punch cards to not only store information, but to input information into a computing device, helping to create the company IBM.
        </p>

    </article>

    <?= printTwoshaft($twoshaft); ?>
    <?= printTwill($twill); ?>
    <?= printSatin($satin); ?>
    <?= printBasket($basket); ?>
    
</main>
<?php require __DIR__ . '/footer.php'; ?>