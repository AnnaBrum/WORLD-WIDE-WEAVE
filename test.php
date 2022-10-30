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


