<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Užduotis - PHP 06</title>
</head>

<body>

<!-- - Sukurk kintamąjį $metai, kurio turinys 1774
- Sukurk if
sąlygą, kuri patikrina ar $metai yra daugiau arba lygu už Vašingtono
įkūrimo metus (panaudok $cities3 masyvo duomenis)
- Jei atsakymas teigiamas, išvesk tekstą: “Vašingtonas yra JAV sostinė.”
-
Sukurk elseif sąlygą patikrinti ar $metai lygu 1774. Jei atsakymas
teigiamas, išvesk tekstą: “JAV sostinė vis dar Filadelfijoje.”
-
Sukurk else sąlygą, kuri išveda tekstą: “Liko ... metai (-ų) iki
Vašingtono įkūrimo.” Vietoj daugtaškio atlik matematinį veiksmą,
kuris iš $cities3[‘Vasingtonas’][1] atima $metai. -->

    <?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija'],
    ];
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];

$metai = 1790;
if($metai >= $cities3['Vasingtonas'][1]) {
    echo 'Vasingtonas yra JAV sostine.';
} else if ($metai == 1774){
    echo 'Vasingtonas sostine vis dar Filadelfijoje.';
} else { 
    $rezultatas = $cities3['Vasingtonas'][1] - $metai;
    echo 'Liko' . $rezultatas . 'metai (-ų) iki Vašingtono įkūrimo.';
}

?>

</body>

</html>