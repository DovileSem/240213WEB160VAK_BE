<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 004 - sprendimas</title>
</head>

<body>

    <!-- Užduotis - PHP 05
- Sukurk ir išvesk naują $cities3 masyvą masyve, kurio duomenys:
- Tokijas - 13.6, 1868, Japonija
- Vasingtonas - 0.6, 1790, JAV
- Maskva - 11.5, 1147, Rusija
- Pridėk: Londonas - 8.6, 43, Anglija
- HTML dalyje, sukurk <ul> ir panaudok <li>, kad išvestum duomenis apie Londoną tokiu formatu:
- Gyventojų skaičius: 8.6 mln.
- Įkurtas: 43 m.
- Šalis: Anglija -->

    <?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija'],
    ];
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];
    echo '<br>';
    print_r($cities3);
    ?>

    <ul>
        <?php
        echo '<li> Gyventoju skaicius: ' . $cities3['Londonas'][0] . ' mln.</li>';
        echo '<li> Įkurta: ' . $cities3['Londonas'][1] . ' m.</li>';
        echo '<li> Šalis: ' . $cities3['Londonas'][2] . '</li>';
        ?>
    </ul>

</body>

</html>