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
<?php function printPattern() {

    $pattern = func_get_arg();

        foreach ($pattern as $row) {?>

            <div class="container">

                <?php foreach ($row as $number) {

                    if ($number === 1) { ?>

                    <div class="black"></div>

                <?php } else { ?>

                    <div class="white"></div>

                <?php } ?>
            <?php } ?>

        </div>
    <?php };

}
?>
</div>

<?= printPattern($pattern)?>

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

<form action="/test.php" method= "GET">

    <h4> Which was your favourite pattern? </h4>

        <input type="radio" id="two-shaft" name="fav-pattern" value="two-shaft">
        <label for="two-shaft">Two-shaft</label><br>

        <input type="radio" id="twill" name="fav-pattern" value="twill">
        <label for="twill">Twill</label><br>

        <input type="radio" id="satin" name="fav-pattern" value="satin">
        <label for="satin">Satin</label><br>

        <input type="radio" id="basket" name="fav-pattern" value="basket">
        <label for="basket">Basket</label><br>

        <input type="submit" value="Submit Answer">

</form>

<?php
$favPattern = $_GET["fav-pattern"];

// switch ($favPattern) {
//     case "two-shaft":
//         echo "That's a strong and durable choice!";
//         break;
//     case "twill":
//         echo "I guess you're into jeans, right?!";
//         break;
//     case "satin":
//         echo "You like the fancy stuff, don't you??";
//         break;
//     case "basket":
//         echo "You like simplicity!";
//         break;
//     default:
//         echo "It's not an easy choice!";
//         break;
// }


    if (isset($_GET['name'])) {
        if ($_GET["fav-pattern"] === "two-shaft"){
        echo "That's a strong and durable choice!";
        } if ($_GET["fav-pattern"] === "twill"){
        echo "I guess you're into jeans, right?!";
        } if ($_GET["fav-pattern"] === "satin"){
        echo "You like the fancy stuff, don't you??";
        } if ($_GET["fav-pattern"] === "basket") {
        echo "You like simplicity!";
        };
    }



