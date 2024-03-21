<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 002 - sprendimas</title>
</head>

<body>


    <!-- PHP 01 užduoties. Panaudok $miestas taip, kad gautume sakinį
 "Vilnius - Lietuvos sostinė" (naudok viengubas kabutes PHP kode). 
 Panaudok $miestas ir $šalis taip, kad gautume sakinį "Vilnius ir Lietuva sparčiai auga"
(dvigubos kabutės PHP kode). -->



    <?php

    $salis = 'Lietuva';
    $miestas = 'Vilnius';
    $vardas = 'Dovile';

    ?>

<p><?php echo $miestas; ?> - Lietuvos sostinė</p>


<p><?php echo $miestas . ' - Lietuvos sostinė '; ?></p>


<p><?php echo " $miestas ir $salis sparčiai auga. "; ?></p>


<!-- <?php
$sakinys1 = 'Sveiki. As esu ' . $vardas . '. Mano gyvenamoji vieta yra ' . $miestas . '.';

echo $sakinys1;

?> -->

<?php
$sakinys2 = "Sveiki. As esu $vardas . Mano gyvenamoji vieta yra.  $miestas .";

echo $sakinys2;

?>

</body>

</html> 