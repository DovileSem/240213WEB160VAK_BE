<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 004 - sprendimas</title>
</head>

<body>


<!-- Užduotis - PHP 04
- Sukurk masyvą $cities ir priskirk ‘Berlynas’, ‘Roma’, ‘Londonas’
- Panaudok print_r funkciją taip, kad ji išvestų masyvo $cities duomenis
- HTML dalyje sukurk vieną <ul> ir pirmąjame <li> išvesk masyvo $cities antrąjį miestą.
- Eilutėje, kuri yra iškart po masyvo deklaracijos, pridėk naują miestą “Tokijas”
- Sukurk ir išvesk asociatyvų masyvą cities2: tokijas - 13.6, vasingtonas - 0.6, maskva - 11.5
- Pridėk: londonas - 8.6
- HTML dalyje sukurk <ul>, kuriame išvesk duomenis tokiu formatu: “Gyventojų skaičius: 13.6 mln.” -->


    <?php
    $cities = [
        'Berlynas',
        'Roma',
        'Londonas',
    ];

    $cities[] = 'Tokijas';
    $cities2 = [
        'Tokijas' => 13.6,
        'Vasingtonas' => 0.6,
        'Maskva' => 11.5,
    ];

    $cities2['Londonas'] = 8.6;
    print_r($cities);
    echo '<br>';
    print_r($cities2)
    ?>

    <ul>
        <?php
        echo "<li>$cities[1]</li>";
        ?>
    </ul>

    <ul>
        <?php
        echo 'Gyventoju skaicius: ' . $cities2['Tokijas'] . ' mln.'
        ?>
    </ul>




    
</body>

</html>