<?php
declare(strict_types=1);

require __DIR__ . '/functions.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/header.php';

?>


<article class= "weavingandcoding">
        <h2> The connection between the loom and the computer </h2>
        <p>
        Invented by Joseph Jacquard and demonstrated in 1801, the Jacquard Loom is an attachment for powered fabric looms. It uses a chain of punch cards to instruct the loom on how to make intricate textiles. For example, a loom could have hundreds of cards with holes corresponding to hooks that can be raised or lowered to make a textile brocade.
        </p>

        <p>
        The Jacquard Loom is important to computer history because it is the first machine to use interchangeable punch cards to instruct a machine to perform automated tasks. Having a machine that could perform various tasks is similar to today's computer programs that can be programmed to perform different tasks. The Jacquard Loom was also an inspiration to Charles Babbage and Ada Lovelace planning to use perforated cards in his analytical engine. Herman Hollerith also used the idea of punch cards to not only store information, but to input information into a computing device, helping to create the company IBM.
        </p>
    </article>

    <!-- Funktion som loopar bilder från arrayen $images (ligger i filen "arrays.php") -->
    <section class="image-section">
        <?= listImages($images); ?>
    </section>

    <?php require __DIR__ . '/footer.php'; ?>

