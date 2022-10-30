<?php
declare(strict_types=1); ?>

<?php

    function randomImage(array $images) {
        $randomImage = array_rand($images,1);
        return $images[$randomImage];
    }

// function randomImage(array $images) {
//     $random_image = array_rand($images, 1);
//     echo $images[$random_image];

// };

?>

<!-- PRINT-PATTERN-FUNCTIONS
    Funktionerna nedan loopar de olika arrayerna med vävmönster som i sin tur loopar rader med blåaa och vita rutor som symboliserar om varpen ska gå upp eller ned. -->

    <!-- TWOSHAFT -->
<?php function printTwoshaft(array $twoshaft) { ?>
    <?php foreach ($twoshaft as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) { ?>
                <?php if ($number === 1) { ?>

                    <div class="black"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php } ?>
            <?php } ?>

        </div>
    <?php }; ?>
<?php }; ?>

    <!-- TWILL -->
<?php function printTwill(array $twill) { ?>
    <?php foreach ($twill as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) { ?>
                <?php if ($number === 1) { ?>

                    <div class="black"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php } ?>
            <?php } ?>

        </div>
    <?php }; ?>
<?php }; ?>

    <!-- SATIN -->
<?php function printSatin(array $satin) { ?>
    <?php foreach ($satin as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) { ?>
                <?php if ($number === 1) { ?>

                    <div class="black"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php } ?>
            <?php } ?>

        </div>
    <?php }; ?>
<?php }; ?>

    <!-- BASKET -->
<?php function printBasket(array $basket) { ?>
    <?php foreach ($basket as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) { ?>
                <?php if ($number === 1) { ?>

                    <div class="black"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php } ?>
            <?php } ?>

        </div>
    <?php }; ?>
<?php }; ?>

