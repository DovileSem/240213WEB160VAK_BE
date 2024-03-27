<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Užduotis - PHP 009</title>
</head>

<body>

<style>
    ul{
        list-style: none;
    }
</style>

    <!-- Užduotis - PHP 009
$ceu = array( 'Italija'=>'Roma',
'Liuksemburgas'=>'Liuksemburgas', 'Belgija'=> 'Briuselis',
'Danija'=>'Kopenhaga', 'Suomija'=>'Helsinkis', 'Prancūzija' =>
'Paryžius', 'Slovakija'=>'Bratislava',
'Slovenija'=>'Liublijana', 'Vokietija' => 'Berlynas', 'Graikija'
=> 'Atėnai', 'Airija'=>'Dublinas',
'Nyderlandai'=>'Amsterdamas', 'Portugalija'=>'Lisabona',
'Ispanija'=>'Madridas', 'Švedija'=>'Stokholmas', 'Didžioji
Britanija'=>'Londonas', 'Kipras'=>'Nikosija',
'Lietuva'=>'Vilnius', 'Čekija'=>'Praha', 'Estija'=>'Talinas',
'Vengrija'=>'Budapeštas', 'Latvija'=>'Ryga',
'Malta'=>'Valeta', 'Austrija' => 'Viena', 'Bulgarija' =>
“Sofija', 'Rumunija' => 'Bukareštas”, 'Lenkija'=>'Varšuva') ;
Surūšiuokite sąrašą pagal sostines. Išveskite valstybės pavadinimus ir sostines. -->

    <?php

    $valstybiuSostines = [
        'Italija' => 'Roma',
        'Liuksemburgas' => 'Liuksemburgas',
        'Belgija' => 'Briuselis',
        'Danija' => 'Kopenhaga',
        'Suomija' => 'Helsinkis',
        'Prancūzija' => 'Paryžius',
        'Slovakija' => 'Bratislava',
        'Slovenija' => 'Liublijana',
        'Vokietija' => 'Berlynas',
        'Graikija' => 'Atėnai',
        'Airija' => 'Dublinas',
        'Nyderlandai' => 'Amsterdamas',
        'Portugalija' => 'Lisabona',
        'Ispanija' => 'Madridas',
        'Švedija' => 'Stokholmas',
        'Didžioji Britanija' => 'Londonas',
        'Kipras' => 'Nikosija',
        'Lietuva' => 'Vilnius',
        'Čekija' => 'Praha',
        'Estija' => 'Talinas',
        'Vengrija' => 'Budapeštas',
        'Latvija' => 'Ryga',
        'Malta' => 'Valeta',
        'Austrija' => 'Viena',
        'Bulgarija' => 'Sofija',
        'Rumunija' => 'Bukareštas',
        'Lenkija' => 'Varšuva'
    ];

asort($valstybiuSostines);

    ?>




<ul>

<?php
 foreach ($valstybiuSostines as $valstybe => $sostine) {
    echo "<li>$sostine yra valstybes $valstybe sostine.</li>";
 }

?>

</ul>




</body>

</html>