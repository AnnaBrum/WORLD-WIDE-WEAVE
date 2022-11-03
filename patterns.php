<?php
declare(strict_types=1);

require __DIR__ . '/functions.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/header.php';
?>

<h2>Patterns</h2>
<!-- information src = https://polymerdatabase.com/Fibers/Fiberpedia%20W.html -->

<div class="pattern-container">
    <div class="twoshaft">
        <?= printTwoshaft($twoshaft); ?>
        <h3> Two-shaft </h3>
            <p>
                Two-shaft (Plain weave), also known as ”one up and one down” is the simplest and most common textile weave. It consists of threads that are interlaced in alternating fashion of 1 up and 1 down, designated as 1/1. This type of weaving produces a simple checkerboard pattern that has the maximum number of binding points. Thus, plain weaves form a strong, and durable cloth that doesn’t fray as easily as other weaves.
            </p>
    </div>

    <div class="twill">
        <?= printTwill($twill); ?>
        <h3> Twill </h3>
            <p>
                Twill is another widely used weave pattern produced by passing the weft yarn under and over multi warp yarns, in an alternating sequence such as “2 up and 1 down” or “2 up and 2 down”, designated as 2/1 and 2/2, respectively. Twill weaves are used to create strong fabrics such as tweed and course denim (jeans) which have a diagonal rib pattern on the fabric surface.
        </p>
    </div>

    <div class="satin">
        <?= printSatin($satin); ?>
        <h3> Satin </h3>
            <p>
                Satin weaves create a very smooth fabric surface by passing the warp (or filling) yarn uninterruptedly over four or more filling (or warp) yarns. Due to the long distance between the interlockings of the treads, this type of weave produces a fabric that is shiny, elastic, soft, and drapes well.
            </p>
    </div>

    <div class="basket">
        <?= printBasket($basket); ?>
        <h3> Basket </h3>
            <p>
            Basket weave is a modification of the plain weave, but with two or more yarns combined and woven as one. This creates a more textured fabric that has an emphasized checkerboard pattern of the plain weave. A fabric that utilizes a basket weave is the Oxford cloth employed to make dress.
            </p>
    </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>
