<?php
declare(strict_types=1);
require __DIR__ . '/arrays.php'; ?>

<!-- Funktion som visar random bild från arrayen $images på sidan "Weaving and Coding" -->
<?php   function listImages(array $images) {
            foreach ($images as $alt => $url) {
?>              <img src="<?=$url?>" alt= "<?=$alt;?>">
<?php               echo "<br>";
            }
        };
?>


<!-- Funktion som printar ut lista på länkar. -->

<?php   function listLinks(array $articles) {
            foreach ($articles as $article => $link) {
?>              <a href="<?=$link?>"> <?="$article";?></a>
<?php               echo "<br>";
            }
        };
?>

<!-- PRINT-PATTERN-FUNCTIONS
Funktionerna nedan loopar de olika arrayerna med vävmönster som i sin tur loopar rader med blåaa och vita rutor som symboliserar om varpen ska gå upp eller ned. -->

<!-- TWOSHAFT -->
<?php function printTwoshaft(array $twoshaft) { ?>
    <?php foreach ($twoshaft as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) { ?>
                <?php if ($number === 1) { ?>

                    <div class="blue"></div>

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

                    <div class="blue"></div>

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

                    <div class="blue"></div>

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

                    <div class="blue"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php } ?>
            <?php } ?>

        </div>
    <?php }; ?>
<?php }; ?>

