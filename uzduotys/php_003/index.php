<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 003 - sprendimas</title>
</head>

<body>


    <?php

    $x = 5;
    $y = 8;

    ?>

<!-- 10 + 7 = 17 -->



<!-- <?php
$atsakymas= $x + $y ;
echo $atsakymas;
?> -->

<p><?php

$sudetis = $x + $y;
echo "$x + $y= $sudetis";
?></p>


<p><?php
$atimtis = $x - $y;
echo "$x - $y= $atimtis";
?></p>


<p><?php
$daugyba = $x * $y;
echo "$x * $y= $daugyba";
?></p>



<?php
$sudetis = $x + $y;
$atimtis = $x - $y;
$sandauga = $x * $y;
$dalyba = $x / $y;
$liekana = $x % $y;
?>

<p><?php echo "$x + $y = $sudetis"; ?></p>
<p><?php echo "$x - $y = $atimtis"; ?></p>
<p><?php echo "$x * $y = $sandauga"; ?></p>
<p><?php echo "$x / $y = $dalyba"; ?></p>
<p><?php echo "$x % $y = $liekana"; ?></p>


<?php
$sk1 = 7;
$sk2 = 10;
$suma = $sk1 + $sk2; // Skaičių suma

echo "{$sk1} + {$sk2} = {$suma}"; // Išvedama suma
?>

</body>

</html> 