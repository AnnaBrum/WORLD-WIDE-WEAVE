<?php
declare(strict_types=1);
require __DIR__ . '/arrays.php';

// Funktion som returnerar värdet "true" om inputen i formuläret = "yes".

function newKnowledge() {
    if ($_GET["newknowledge"] === "yes") {
        return true;
    } else {
        return false;
    }
}


// Funktion som printar bilder från arrayen $images på sidan "Weaving and Coding".

function listImages(array $images) {
            foreach ($images as $alt => $url) {
?>              <img src="<?=$url;?>" alt= "<?=$alt;?>">
<?php              echo "<br>";
            };
        }



// Funktion som printar ut lista på länkar från arrayen $articles på sidan "Links".

function listLinks(array $articles) {
            foreach ($articles as $article => $link) {
?>              <a href="<?=$link?>"target="_blank">  <?="$article";?></a>
<?php               echo "<br>";
            };
        }


// PRINT-PATTERN-FUNCTIONS
// Funktionerna nedan loopar de olika arrayerna med vävmönster som i sin tur loopar rader med blåaa och vita rutor som symboliserar om varpen ska gå upp eller ned.

// TWOSHAFT
function printTwoshaft(array $twoshaft) {
    foreach ($twoshaft as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) {
                if ($number === 1) { ?>

                    <div class="blue"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php }
            }; ?>

        </div>
    <?php };
    }

// TWILL
function printTwill(array $twill) {
    foreach ($twill as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) {
                if ($number === 1) { ?>

                    <div class="blue"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php }
            }; ?>

        </div>
    <?php };
}

// SATIN
function printSatin(array $satin) {
    foreach ($satin as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) {
                if ($number === 1) { ?>

                    <div class="blue"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php }
            }; ?>

        </div>
    <?php };
 }

// BASKET
function printBasket(array $basket) {
    foreach ($basket as $row) { ?>
        <div class="container">

            <?php foreach ($row as $number) {
                if ($number === 1) { ?>

                    <div class="blue"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php }
            }; ?>

        </div>
    <?php };
}

