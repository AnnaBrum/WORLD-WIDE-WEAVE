<?php

declare(strict_types=1); ?>

<?php

$patterns = [
    $twoshaft = [
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0],
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0],
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0],
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0]

    ],

    $twill = [
        [0, 0, 1, 1, 0, 0, 1, 1],
        [0, 1, 1, 0, 0, 1, 1, 0],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [1, 0, 0, 1, 1, 0, 0, 1],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [0, 1, 1, 0, 0, 1, 1, 0],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [1, 0, 0, 1, 1, 0, 0, 1]

    ],

    $satin = [
        [0, 1, 0, 0, 0, 0, 1],
        [0, 0, 0, 0, 1, 0, 0],
        [0, 0, 1, 0, 0, 0, 0],
        [1, 0, 0, 0, 0, 1, 0],
        [0, 0, 0, 1, 0, 0, 0],
        [0, 1, 0, 0, 0, 0, 1],
        [0, 0, 0, 0, 1, 0, 0]

    ],

    $basket = [
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0]

    ]
];
?>

<style>
    .container {
  display: flex;
}

.black {
  width: 20px;
  height: 20px;
  background-color: rgb(55, 0, 255);
  border: 0.5px solid black;
}

.white {
  width: 20px;
  height: 20px;
  background-color: white;
  border: 0.5px solid black;
}

.pattern {
    display: flex;
    flex-direction:row;
}
.pattern-repeat {
  display: block;

}


</style>
<div class= "pattern">
<?php function printPattern(array $twill) { ?>

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
</div>


<!-- <div class= "pattern-repeat">
<?php for ($i=0; $i < 10; $i++) {
    echo PrintPattern($twill);
} ?>
</div> -->

<?php



$bg_colors = [
    "yellow" => "#ffffca",
    "blue" => "#cae9ff",
    "pink" => "#fbd5d5",
    "green" => "#d5fbd8"

];

/* ASSOCIATIV ARRAY ARRAY MED LÄNKAR TILL BILDER.
    $images = "image url" => "alt-text" */

$images = [
    "card-maker" => "./images/card-maker.jpeg",
    "ibm punchcards" => "./images/ibm_punchcards_600.jpg",
    "Jacquard Loom" => "./images/jacquard-loom.png",
    "Jacquard Loom punchcards" => "./images/punchcards.jpg"
];
?>


<!-- /* --------------- */ -->

<?php   function listImages(array $images) {
            foreach ($images as $alt => $url) {
?>              <img src="<?=$url;?>" alt= "<?=$alt;?>">
<?php              echo "<br>";
            }
        };
?>

<!-- /* --------------- */ -->

<form action="/patterns.php">

    <h4> Which was your favourite pattern? </h4>

        <input type="radio" id="two-shaft" name="fav_pattern" value="two-shaft">
        <label for="two-shaft">Two-shaft</label><br>

        <input type="radio" id="twill" name="fav_pattern" value="twill">
        <label for="twill">Twill</label><br>

        <input type="radio" id="satin" name="fav_pattern" value="satin">
        <label for="satin">Satin</label><br>

        <input type="radio" id="basket" name="fav_pattern" value="basket">
        <label for="basket">Basket</label>
</form>

<?php   function quiz() {
    if ($_POST["fav_pattern"] === "") {
        return true;
    } else {
        return false;
    }
}
?>
