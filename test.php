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
        [0, 1, 0, 0, 0, 0, 1, 0],
        [0, 0, 0, 0, 1, 0, 0, 0],
        [0, 0, 1, 0, 0, 0, 0, 1],
        [1, 0, 0, 0, 0, 1, 0, 0],
        [0, 0, 0, 1, 0, 0, 0, 0],
        [0, 1, 0, 0, 0, 0, 1, 0],
        [0, 0, 0, 0, 1, 0, 0, 0],
        [0, 0, 1, 0, 0, 0, 0, 1]

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
</style>

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
