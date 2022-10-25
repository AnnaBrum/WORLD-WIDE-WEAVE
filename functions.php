<?php
declare(strict_types=1);

require __DIR__ . '/data.php';

/* foreach ($weave as $row) {
    ?>
    <div class="container">
    <?php
        foreach ($row as $number) {
            if ($number === 1) {
                ?> <div class="black"></div> <?php
            }   
            else {
                ?> <div class="white"></div> <?php
            }
        }
    ?>
    </div>
<?php }; */

foreach ($satin as $row) {
    ?>
    <div class="container">
    <?php
        foreach ($row as $number) {
            if ($number === 1) {
                ?> <div class="black"></div> <?php
            }   
            else {
                ?> <div class="white"></div> <?php
            }
        }
    ?>
    </div>
<?php };